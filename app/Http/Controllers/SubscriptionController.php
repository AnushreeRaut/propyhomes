<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        try {
            // Validate the email
            $request->validate([
                'email' => 'required|email|unique:subscriptions,email',
            ]);

            // Create the subscription
            Subscription::create([
                'email' => $request->email,
            ]);

            return redirect()->back()->with('success', 'Thank you for subscribing!');
        } catch (\Illuminate\Database\QueryException $e) {
            // Handle database query errors
            return redirect()->back()->with('error', 'There was a problem with your subscription. Please try again.');
        } catch (\Exception $e) {
            // Handle general exceptions
            return redirect()->back()->with('error', 'An unexpected error occurred. Please try again later.');
        }
    }

    // Method to display all subscriptions
    public function index()
    {
        $subscriptions = Subscription::orderByDesc('created_at')->get();
        return view('admin.subscribe.index', compact('subscriptions'));
    }

    // Method to delete a subscription
    // Method to delete a subscription
    public function destroy($id)
    {
        $subscription = Subscription::find($id);

        if ($subscription) {
            $subscription->delete();
            return redirect()->back()->with('success', 'Subscription deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Subscription not found!');
        }
    }

    public function checkEmail(Request $request)
    {
        $email = $request->email;

        // Check if the email already exists in the database
        $exists = Subscription::where('email', $email)->exists();

        if ($exists) {
            return response()->json(['exists' => true], 200);
        }

        return response()->json(['exists' => false], 200);
    }
}
