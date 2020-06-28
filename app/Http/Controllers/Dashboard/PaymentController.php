<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Arr;
use App\Student;
use App\Classroom;
use App\Spp;
use App\Payment;
use App\PaymentDetail;

class PaymentController extends Controller
{
    public function createPayment(Request $request)
    {
        $student = Student::whereName($request->student_name)->first();
        $user = auth()->user();
        $spp = Spp::find($request->spp_id);

        $paymentOwnedWithTrashed = $student->payments()->withTrashed()->get();
        $paymentOwned = Payment::whereStudentId($student->id)->whereUserId($user->id)->first();
        $sppOwned = [];
        foreach ($paymentOwnedWithTrashed as $payment) {
            foreach ($payment->paymentDetails()->withTrashed()->get() as $paymentDetail) {
                $sppOwned[] = $paymentDetail->spp_id;
            }
        }
        if (!in_array($spp->id, $sppOwned)) {
            if (!$paymentOwned) {
                $paymentOwned = Payment::create([
                    'student_id' => $student->id,
                    'user_id' => $user->id
                ]);
            }
            PaymentDetail::create([
                'payment_id' => $paymentOwned->id,
                'spp_id' => $spp->id
            ]);
        } else {
            Alert::error($student->name, 'Already Paid ' . 'Spp ' . date('F Y', $spp->date) . ' !');
            return redirect()->back();
        }

        $paymentOwned = Payment::whereStudentId($student->id)->whereUserId($user->id)->first();
        $totalPayment = 0;
        foreach ($paymentOwned->paymentDetails as $payment) {
            $totalPayment += $payment->spp->nominal;
        }
        $paymentOwned->update([
            'total_payment' => $totalPayment
        ]);
        Alert::success('Spp ' . date('F Y', $spp->date), 'Has Been Successfully Added!');
        return redirect()->back();
    }

    public function deletePaymentDetail($id)
    {
        $paymentDetailOwned = PaymentDetail::find($id);
        $paymentOwned = $paymentDetailOwned->payment;
        $sppOwned = $paymentDetailOwned->spp;

        $paymentOwned->update([
            'total_payment' => $paymentOwned->total_payment - $sppOwned->nominal
        ]);
        Alert::success('Spp ' . date('F Y', $sppOwned->date), 'Has Been Successfully Deleted!');
        $paymentDetailOwned->forceDelete();
        if ($paymentOwned->total_payment === 0) {
            $paymentOwned->forceDelete();
        }
        return redirect()->back();
    }

    public function clearPayment($id)
    {
        $paymentOwned = Payment::find($id);
        $paymentOwned->paymentDetails()->delete();
        $paymentOwned->delete();
        Alert::info('Spp Payment', 'Has Been Successfully Cleared!');
        return redirect()->back();
    }

    public function manageHistory()
    {
        $students = Student::all();
        return view('dashboard.managehistorypayment', [
            'students' => $students
        ]);
    }

    public function detailHistory($id)
    {
        $student = Student::find($id);
        $payments = $student->payments()->withTrashed()->get();
        return view('dashboard.infohistorystudent', [
            'student' => $student,
            'payments' => $payments
        ]);
    }

    public function paymentDetailHistory($id)
    {
        $payment = Payment::withTrashed()->find($id);
        $student = $payment->student;
        return view('payment.infopaymentdetailhistory', [
            'student' => $student,
            'payment' => $payment
        ]);
    }

    public function reportPayment($id)
    {
        // 
    }
}
