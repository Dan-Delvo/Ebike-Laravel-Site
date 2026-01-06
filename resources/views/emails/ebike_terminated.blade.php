@component('mail::message')
# ❌ Session Terminated

Hello,

Unfortunately, your charging session has been **terminated** due to disconnection.

@component('mail::panel')
### 🔴 Session Termination Details

**Status:** ❌ Terminated
**Time:** {{ now()->format('g:i A') }}
**Date:** {{ now()->format('F j, Y') }}
**Time Remaining:** {{ $timeRemaining ?? 'N/A' }} minutes
**Reason:** eBike not reconnected within grace period
@endcomponent

---

## ⚠️ What Happened?

Your eBike was disconnected from the charging station and was **not reconnected within the 60-second grace period**. As a result, your charging session has been automatically terminated.

---

## 💰 Session Summary

- **Remaining Time:** Any unused charging time has been forfeited
- **Refund:** Disconnected sessions are not eligible for refunds
- **Next Steps:** You'll need to start a new charging session if needed

---

## 🔄 Start a New Session

To continue charging your eBike, please:

1. **Connect your eBike** to an available charging station
2. **Initiate a new session** via the app or payment terminal
3. **Keep your eBike connected** until charging is complete

---

**Questions or concerns?** Our support team is here to help.

We appreciate your understanding and hope to serve you again soon! 🚴‍♂️

Regards,
{{ config('app.name') }}
@endcomponent
