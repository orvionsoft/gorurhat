@extends('frontEnd.layouts.master')
@section('title','Contact Us')
@section('content')

<div style="margin: 0; padding: 0; background-color: #fcfcfc; font-family: 'Segoe UI', Arial, sans-serif; color: #333;">

    <div style="text-align: center; padding: 60px 20px;">
        <h1 style="color: #c00000; font-size: 32px; margin: 0 0 10px 0;">আমাদের সাথে যোগাযোগ করুন</h1>
        <p style="color: #666; font-size: 14px; margin: 0; text-align: center;">আমরা ২৪/৭ যোগাযোগের জন্য প্রস্তুত</p>
    </div>

    <section style="max-width: 1100px; margin: 0 auto 80px auto; display: flex; gap: 30px; padding: 0 20px;">
        
        <div style="flex: 1; display: flex; flex-direction: column; gap: 20px;">
            
            <div style="background: white; padding: 25px; border-radius: 10px; display: flex; align-items: center; gap: 20px; border-bottom: 3px solid #fdf2f2;">
                <div style="color: #c00000; font-size: 24px; background: #fff5f5; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center;"><i class="bi bi-telephone-fill"></i></div>
                <div>
                    <div style="font-weight: bold; font-size: 18px;">সরাসরি ফোন করুন</div>
                    <div style="color: #c00000; font-weight: bold; margin-top: 5px;">{{ $contact->hotline ?? '+৮৮০ ১২৩৪৫৬৭৮৯০' }}</div>
                </div>
            </div>

            <div style="background: #c00000; padding: 25px; border-radius: 10px; color: white; position: relative; overflow: hidden;">
                <div style="font-weight: bold; font-size: 18px; margin-bottom: 15px;">দ্রুত বার্তার জন্য হোয়াটসঅ্যাপ</div>
                <a href="https://wa.me/{{ str_replace(['+', ' ', '-'], '', $contact->hotline ?? '8801234567890') }}" target="_blank" style="background: #25d366; color: white; border: none; padding: 12px 20px; border-radius: 5px; font-weight: bold; cursor: pointer; display: inline-flex; align-items: center; gap: 10px; text-decoration: none;">
                    <i class="bi bi-whatsapp"></i> হোয়াটসঅ্যাপে কথা বলুন
                </a>
            </div>

            <div style="background: white; padding: 25px; border-radius: 10px; display: flex; align-items: center; gap: 20px; border-bottom: 3px solid #fdf2f2;">
                <div style="color: #c00000; font-size: 24px; background: #fff5f5; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center;"><i class="bi bi-geo-fill"></i></div>
                <div>
                    <div style="font-weight: bold; font-size: 18px;">আমাদের ঠিকানা</div>
                    <div style="color: #666; font-size: 14px; margin-top: 5px; line-height: 1.4;">
                        {{ $contact->address ?? 'হেড অফিস: বাসা-১২৩, ব্লক-বি, বনানী, ঢাকা-১২১৩, বাংলাদেশ।' }}
                    </div>
                </div>
            </div>
        </div>

        <div style="flex: 1.5; background: white; padding: 40px; border-radius: 15px; position: relative;">
            <h2 style="color: #c00000; margin: 0 0 10px 0; font-size: 24px;">বার্তা পাঠান</h2>
            <div style="width: 60px; height: 3px; background: #c00000; margin-bottom: 30px;"></div>
            
            <div style="position: absolute; top: 30px; right: 40px; font-size: 60px; color: #fdf2f2;"><i class="bi bi-envelope-fill"></i></div>

            @if(session('success'))
                <div style="background: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact') }}" method="POST">
                @csrf
                <div style="display: flex; gap: 20px; margin-bottom: 20px;">
                    <div style="flex: 1;">
                        <label style="display: block; font-size: 13px; font-weight: bold; margin-bottom: 8px;">আপনার নাম *</label>
                        <input type="text" name="name" placeholder="পুরো নাম লিখুন" value="{{ old('name') }}" style="width: 100%; padding: 12px; border: none; background: #f9f9f9; border-bottom: 2px solid #eee; box-sizing: border-box; border-radius: 4px;" required>
                        @error('name')
                            <span style="color: red; font-size: 12px;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div style="flex: 1;">
                        <label style="display: block; font-size: 13px; font-weight: bold; margin-bottom: 8px;">ফোন নম্বর *</label>
                        <input type="text" name="phone" placeholder="+৮৮০" value="{{ old('phone') }}" style="width: 100%; padding: 12px; border: none; background: #f9f9f9; border-bottom: 2px solid #eee; box-sizing: border-box; border-radius: 4px;" required>
                        @error('phone')
                            <span style="color: red; font-size: 12px;">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                
                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-size: 13px; font-weight: bold; margin-bottom: 8px;">ইমেইল *</label>
                    <input type="email" name="email" placeholder="your@email.com" value="{{ old('email') }}" style="width: 100%; padding: 12px; border: none; background: #f9f9f9; border-bottom: 2px solid #eee; box-sizing: border-box; border-radius: 4px;" required>
                    @error('email')
                        <span style="color: red; font-size: 12px;">{{ $message }}</span>
                    @enderror
                </div>

                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-size: 13px; font-weight: bold; margin-bottom: 8px;">বিষয় *</label>
                    <input type="text" name="subject" placeholder="বিষয় লিখুন" value="{{ old('subject') }}" style="width: 100%; padding: 12px; border: none; background: #f9f9f9; border-bottom: 2px solid #eee; box-sizing: border-box; border-radius: 4px;" required>
                    @error('subject')
                        <span style="color: red; font-size: 12px;">{{ $message }}</span>
                    @enderror
                </div>
                
                <div style="margin-bottom: 30px;">
                    <label style="display: block; font-size: 13px; font-weight: bold; margin-bottom: 8px;">আপনার বার্তা *</label>
                    <textarea name="message" placeholder="কিভাবে আমরা আপনাকে সাহায্য করতে পারি?" style="width: 100%; padding: 12px; border: none; background: #f9f9f9; border-bottom: 2px solid #eee; box-sizing: border-box; height: 120px; border-radius: 4px; resize: none;" required>{{ old('message') }}</textarea>
                    @error('message')
                        <span style="color: red; font-size: 12px;">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" style="background: #c00000; color: white; border: none; padding: 12px 30px; border-radius: 5px; font-weight: bold; cursor: pointer; display: flex; align-items: center; gap: 10px; box-shadow: 0 4px 10px rgba(192, 0, 0, 0.3);">
                    বার্তা পাঠান <i class="bi bi-arrow-right"></i>
                </button>
            </form>
        </div>
    </section>

    <section style="background: #fdf2f2; padding: 40px 20px;">
        <div style="max-width: 1100px; margin: 0 auto; height: 350px; border-radius: 20px; position: relative; overflow: hidden; border: 8px solid white;">
            
            <iframe src="https://maps.google.com/maps?q=Banani,Dhaka,Bangladesh&output=embed" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen></iframe>

            <div style="position: absolute; right: 40px; top: 50%; transform: translateY(-50%); background: white; padding: 25px; border-radius: 12px; width: 220px; text-align: center;">
                <div style="color: #c00000; font-size: 30px; margin-bottom: 10px;"><i class="bi bi-geo-fill"></i></div>
                <div style="font-weight: bold; font-size: 14px; margin-bottom: 5px;">হেড অফিস সেন্টার</div>
                <div style="font-size: 12px; color: #777; margin-bottom: 15px;">{{ $contact->address ?? 'বনানী, ঢাকা, বাংলাদেশ' }}</div>
                <a href="https://maps.google.com/maps?q=Banani,Dhaka,Bangladesh" target="_blank" style="color: #c00000; font-size: 12px; text-decoration: none; font-weight: bold; border-bottom: 1px solid #c00000;">গুগল ম্যাপে দেখুন</a>
            </div>
        </div>
    </section>

</div>

<style>
/* Responsive Styles */
@media (max-width: 1024px) {
    section[style*="max-width: 1100px"] {
        margin: 0 auto 60px auto !important;
    }
}

@media (max-width: 768px) {
    /* Main section becomes column on tablet */
    section[style*="max-width: 1100px"] {
        flex-direction: column !important;
        gap: 30px !important;
    }
    
    /* Header padding adjustment */
    div[style*="text-align: center; padding: 60px 20px"] {
        padding: 40px 15px !important;
    }
    
    h1[style*="color: #c00000"] {
        font-size: 28px !important;
    }
    
    /* Contact cards full width */
    div[style*="flex: 1; display: flex; flex-direction: column; gap: 20px"] {
        order: 2 !important;
    }
    
    /* Form section full width */
    div[style*="flex: 1.5; background: white; padding: 40px"] {
        order: 1 !important;
        padding: 30px !important;
    }
    
    /* Hide decorative envelope on tablet */
    div[style*="position: absolute; top: 30px; right: 40px; font-size: 60px"] {
        display: none !important;
    }
    
    /* Form fields stack on mobile */
    div[style*="display: flex; gap: 20px; margin-bottom: 20px"] {
        flex-direction: column !important;
        gap: 15px !important;
    }
    
    /* Map section adjustments */
    section[style*="background: #fdf2f2; padding: 40px 20px"] {
        padding: 30px 15px !important;
    }
    
    div[style*="max-width: 1100px; margin: 0 auto; height: 350px"] {
        height: 400px !important;
    }
    
    /* Map overlay card reposition */
    div[style*="position: absolute; right: 40px; top: 50%; transform: translateY(-50%)"] {
        position: relative !important;
        right: auto !important;
        top: auto !important;
        transform: none !important;
        width: auto !important;
        max-width: 280px !important;
        margin: 20px auto 0 !important;
        background: rgba(255, 255, 255, 0.95) !important;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1) !important;
    }
}

@media (max-width: 480px) {
    /* Further adjustments for mobile */
    div[style*="text-align: center; padding: 60px 20px"] {
        padding: 30px 15px !important;
    }
    
    h1[style*="color: #c00000"] {
        font-size: 24px !important;
    }
    
    p[style*="color: #666; font-size: 14px"] {
        font-size: 13px !important;
    }
    
    /* Contact cards padding reduction */
    div[style*="background: white; padding: 25px; border-radius: 10px; display: flex; align-items: center; gap: 20px"] {
        padding: 20px !important;
        gap: 15px !important;
    }
    
    /* Icon circles smaller on mobile */
    div[style*="color: #c00000; font-size: 24px; background: #fff5f5; width: 50px; height: 50px; border-radius: 50%"] {
        width: 40px !important;
        height: 40px !important;
        font-size: 20px !important;
        flex-shrink: 0 !important;
    }
    
    /* Text sizes adjustment */
    div[style*="font-weight: bold; font-size: 18px"] {
        font-size: 16px !important;
    }
    
    /* WhatsApp section */
    div[style*="background: #c00000; padding: 25px; border-radius: 10px"] {
        padding: 20px !important;
    }
    
    div[style*="font-weight: bold; font-size: 18px; margin-bottom: 15px"] {
        font-size: 16px !important;
    }
    
    a[href*="https://wa.me"] {
        padding: 10px 16px !important;
        font-size: 14px !important;
        width: 100% !important;
        justify-content: center !important;
    }
    
    /* Form section padding */
    div[style*="flex: 1.5; background: white; padding: 40px"] {
        padding: 25px 20px !important;
    }
    
    h2[style*="color: #c00000; margin: 0 0 10px 0; font-size: 24px"] {
        font-size: 22px !important;
    }
    
    /* Form inputs */
    input, textarea {
        font-size: 14px !important;
        padding: 10px !important;
    }
    
    /* Submit button */
    button[type="submit"] {
        width: 100% !important;
        justify-content: center !important;
        padding: 12px 20px !important;
    }
    
    /* Map section height */
    div[style*="max-width: 1100px; margin: 0 auto; height: 350px"] {
        height: 450px !important;
    }
    
    /* Address text */
    div[style*="color: #666; font-size: 14px; margin-top: 5px; line-height: 1.4"] {
        font-size: 13px !important;
    }
}

/* Small mobile devices */
@media (max-width: 380px) {
    div[style*="background: white; padding: 25px; border-radius: 10px; display: flex; align-items: center; gap: 20px"] {
        flex-direction: column !important;
        text-align: center !important;
    }
    
    h1[style*="color: #c00000"] {
        font-size: 22px !important;
    }
}

/* Tablet landscape specific */
@media (min-width: 769px) and (max-width: 1024px) {
    section[style*="max-width: 1100px"] {
        gap: 20px !important;
    }
    
    div[style*="flex: 1.5; background: white; padding: 40px"] {
        padding: 30px !important;
    }
}

/* Ensure images and icons are responsive */
img, svg, i {
    max-width: 100%;
    height: auto;
}

/* Smooth transitions for all elements */
* {
    transition: all 0.3s ease;
}

/* Better touch targets for mobile */
@media (max-width: 768px) {
    button, 
    a[href*="https://wa.me"],
    input, 
    select, 
    textarea {
        min-height: 44px !important;
    }
    
    button i, 
    a i {
        font-size: 16px !important;
    }
}

/* Print styles */
@media print {
    body {
        background: white;
    }
    
    .map-overlay-card {
        position: static !important;
        transform: none !important;
        background: white !important;
    }
}
</style>

@endsection