@component('mail::message')
# ⚠️ URGENT WARNING - eBike Unplugged!

Hello! 👋

**ATTENTION:** Your eBike has been disconnected from the charging station!

@component('mail::panel')
### ⏰ Grace Period Active

**Status:** 🔴 Unplugged - Grace Period
**Time:** {{ now()->format('g:i A') }}
**Date:** {{ now()->format('F j, Y') }}
**Grace Period:** 60 seconds remaining
**Action Required:** Reconnect immediately!
@endcomponent

---

## 🚨 Immediate Action Required!

Your charging session has been interrupted. Please take one of the following actions **within 60 seconds**:

### Option 1: Reconnect Your eBike 🔌
If charging is incomplete, **reconnect your eBike immediately** to continue the charging session.

### Option 2: Verify Full Charge 🔋
If your eBike is **fully charged**, please check the battery percentage indicator before leaving the station.

---

## ⚠️ Important Notice

- **Session Termination:** If not reconnected within 60 seconds, your charging session will be automatically terminated
- **Time Loss:** Any remaining prepaid charging time will be forfeited
- **No Refund:** Disconnected sessions cannot be resumed or refunded

---

**Need immediate assistance?** Contact our support team now!

Please act quickly to avoid losing your charging session! ⚡

Regards,
{{ config('app.name') }}
@endcomponent
