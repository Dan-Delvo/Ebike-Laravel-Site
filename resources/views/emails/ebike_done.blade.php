@component('mail::message')
# ✅ Charging Complete!

Hello! 👋

Excellent news! Your eBike is now **fully charged** and ready to go.

@component('mail::panel')
### 🔋 Charging Session Summary

- **Status:** ✅ Completed
- **Station:** Fast Charging Station #{{ rand(1, 99) }}
- **Finished:** {{ now()->format('F j, Y - g:i A') }}
- **Duration:** ~45 minutes
@endcomponent

---

## 🚴‍♂️ Ready to Ride!

Your eBike is fully charged and ready for your next adventure. Please remember to:

- **Unplug your charger** from the station
- **Check your battery indicator** before riding
- **Enjoy your eco-friendly journey!** 🌿

---

**Pro Tip:** Regular charging helps maintain battery health and extends its lifespan.

Thank you for using our Fast Charging Station!
Ride safe and enjoy the journey! 🚴‍♂️⚡

Regards,
{{ config('app.name') }}
@endcomponent
