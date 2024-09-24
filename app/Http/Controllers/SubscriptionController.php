<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validate the email
        $request->validate([
            'email' => 'required|email|unique:subscriptions,email',
        ]);

        // Create the subscription
        Subscription::create([
            'email' => $request->email,
        ]);

        return redirect()->back()->with('success', 'Thank you for subscribing!');
    }
    // Method to display all subscriptions
    public function index()
    {
        $subscriptions = Subscription::all();
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
}
