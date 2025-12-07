@component('mail::message')
# ⚡ Charging Started!

Hello there! 👋

Great news! Your eBike is now connected and **actively charging**.

@component('mail::panel')
### 🔌 Charging Session Details

**Status:** Charging in Progress
**Station:** Fast Charging Station #1
**Started:** {{ now()->format('F j, Y - g:i A') }}
**Estimated Completion:** {{ now()->addMinutes(45)->format('g:i A') }}
@endcomponent

---

## 💡 What's Next?

- We'll notify you when your eBike is **fully charged**
- You can monitor your charging progress in real-time via the app
- Feel free to grab a coffee while you wait! ☕

---

**Need help?** Contact our support team anytime.

Stay charged and ride safe! 🚴‍♂️⚡

Regards,
{{ config('app.name') }}
@endcomponent
