<!DOCTYPE html>
<html lang="en">
<head>
  @include('frontend.layout.header')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body { background: #ffffff; color: #111827; font-family: 'Playfair Display', serif; line-height: 1.6; }

    .container { max-width: 1200px; margin: 0 auto; padding: 0 24px; }

    /* ===== HEADER ===== */
    .contact-header {
      text-align: center;
      padding: 60px 24px 40px;
    }
    .contact-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(244,166,55,0.08);
      border: 1px solid rgba(244,166,55,0.15);
      padding: 8px 20px;
      border-radius: 50px;
      font-size: 12px;
      font-weight: 600;
      color: #f4a637;
      letter-spacing: 2px;
      text-transform: uppercase;
      margin-bottom: 20px;
    }
    .contact-badge::before {
      content: '';
      width: 6px; height: 6px;
      border-radius: 50%;
      background: #f4a637;
    }
    .contact-header h2 {
      font-family: 'Playfair Display', serif;
      font-size: clamp(28px, 4vw, 40px);
      font-weight: 800;
      color: #111827;
      margin-bottom: 12px;
    }
    .contact-header h2 span { color: #f4a637; }
    .contact-header p {
      font-size: 16px;
      color: #111827;
      max-width: 500px;
      margin: 0 auto;
    }

    /* ===== MAP + FORM GRID ===== */
    .contact-grid {
      padding: 0 0 80px;
    }
    .map-form-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 30px;
      align-items: start;
    }

    /* ===== MAP CARD ===== */
    .map-card {
      background: #f9fafb;
      border-radius: 16px;
      overflow: hidden;
      border: 1px solid #f0f0f0;
    }
    .map-head {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 16px 20px;
      border-bottom: 1px solid #f0f0f0;
    }
    .map-head .lbl {
      font-size: 12px;
      font-weight: 600;
      color: #111827;
      text-transform: uppercase;
      letter-spacing: 1px;
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .map-head .lbl i { color: #f4a637; }
    .map-head .live {
      display: flex;
      align-items: center;
      gap: 6px;
      font-size: 11px;
      font-weight: 600;
      color: #10b981;
      text-transform: uppercase;
      letter-spacing: 1px;
    }
    .map-head .live .b {
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background: #10b981;
      animation: livePulse 1.5s ease-in-out infinite;
    }
    @keyframes livePulse {
      0%, 100% { opacity: 1; }
      50% { opacity: 0.3; }
    }
    .map-frame {
      height: 400px;
    }
    .map-frame iframe {
      width: 100%;
      height: 100%;
      border: none;
    }

    /* ===== FORM CARD ===== */
    .form-card {
      background: #fff;
      border-radius: 16px;
      padding: 32px;
      border: 1px solid #f0f0f0;
      box-shadow: 0 4px 20px rgba(0,0,0,0.04);
    }
    .form-title {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 28px;
      padding-bottom: 16px;
      border-bottom: 2px solid #f4a637;
    }
    .form-title h3 {
      font-family: 'Playfair Display', serif;
      font-size: 24px;
      font-weight: 700;
      color: #111827;
    }
    .form-title h3 span { color: #f4a637; }
    .form-title .ref {
      font-size: 11px;
      font-weight: 600;
      color: #9ca3af;
      letter-spacing: 2px;
      text-transform: uppercase;
    }
    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
      margin-bottom: 16px;
    }
    .field label {
      display: flex;
      align-items: center;
      gap: 6px;
      font-size: 12px;
      font-weight: 600;
      color: #374151;
      text-transform: uppercase;
      letter-spacing: 1px;
      margin-bottom: 8px;
    }
    .field label i { color: #f4a637; font-size: 6px; }
    .field input,
    .field textarea {
      width: 100%;
      padding: 12px 16px;
      background: #f9fafb;
      border: 1px solid #e5e7eb;
      border-radius: 8px;
      font-family: 'Playfair Display', serif;
      font-size: 14px;
      color: #111827;
      outline: none;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }
    .field input:focus,
    .field textarea:focus {
      border-color: #f4a637;
      box-shadow: 0 0 0 3px rgba(244,166,55,0.08);
    }
    .field input::placeholder,
    .field textarea::placeholder { color: #9ca3af; }
    .field textarea {
      min-height: 120px;
      resize: vertical;
    }
    .form-bottom {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-top: 8px;
    }
    .social-row {
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .social-row .slbl {
      font-size: 11px;
      font-weight: 600;
      color: #9ca3af;
      text-transform: uppercase;
      letter-spacing: 1px;
    }
    .social-row a {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 36px;
      height: 36px;
      border-radius: 8px;
      background: #f3f4f6;
      color: #6b7280;
      text-decoration: none;
      font-size: 14px;
      transition: all 0.3s ease;
    }
    .social-row a:hover {
      background: #f4a637;
      color: #fff;
    }
    .btn-send {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: #f4a637;
      color: #fff;
      border: none;
      padding: 13px 28px;
      border-radius: 8px;
      font-family: 'Playfair Display', serif;
      font-size: 14px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.35s ease;
    }
    .btn-send:hover {
      background: #c62e2e;
      transform: translateY(-2px);
      box-shadow: 0 8px 24px -6px rgba(244,166,55,0.4);
    }
    .btn-send .arrow-ring {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 26px;
      height: 26px;
      border-radius: 50%;
      background: rgba(255,255,255,0.2);
      font-size: 11px;
      transition: transform 0.3s ease;
    }
    .btn-send:hover .arrow-ring { transform: translateX(3px); }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 992px) {
      .map-form-grid { grid-template-columns: 1fr; }
    }
    @media (max-width: 640px) {
      .form-row { grid-template-columns: 1fr; }
      .form-bottom { flex-direction: column; gap: 16px; align-items: stretch; }
      .btn-send { justify-content: center; }
    }
  </style>
</head>

<body class="no-hero">
  @include('frontend.layout.headerNav')

  <!-- HEADER -->
  <div class="contact-header">
    <div class="contact-badge">Contact Us</div>
    <h2>Get In <span>Touch</span></h2>
    <p>Have a project in mind? We'd love to hear from you — drop us a line and our team will respond shortly.</p>
  </div>

  @php $c = $contacts->first(); @endphp

  <!-- MAP + FORM -->
  <section class="contact-grid">
    <div class="container">
      <div class="map-form-grid">

        <!-- MAP -->
        <div class="map-card">
          <div class="map-head">
            <span class="lbl"><i class="fa-solid fa-map-location-dot"></i> Location / Headquarter</span>
            <span class="live"><span class="b"></span> Live</span>
          </div>
          <div class="map-frame">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.8596995503444!2d90.35103507608738!3d23.823587585961263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c1006cb54f2d%3A0x970526e9c2b197c6!2sInoodex!5e0!3m2!1sen!2sbd!4v1751177416023!5m2!1sen!2sbd"
              allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>

        <!-- FORM -->
        <div class="form-card">
          <div class="form-title">
            <h3>Send a <span>Message</span></h3>
            <span class="ref">[ INQ-{{ date('Y') }} ]</span>
          </div>
          <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div class="form-row">
              <div class="field">
                <label><i class="fa-solid fa-circle"></i> Name *</label>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Your full name" required>
              </div>
              <div class="field">
                <label><i class="fa-solid fa-circle"></i> Email *</label>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="you@domain.com" required>
              </div>
            </div>
            <div class="form-row">
              <div class="field">
                <label><i class="fa-regular fa-circle"></i> Phone</label>
                <input type="text" name="phone" value="{{ old('phone') }}" placeholder="+880 ...">
              </div>
              <div class="field">
                <label><i class="fa-regular fa-circle"></i> Subject</label>
                <input type="text" name="subject" value="{{ old('subject') }}" placeholder="Project inquiry">
              </div>
            </div>
            <div class="field" style="margin-bottom:16px;">
              <label><i class="fa-solid fa-circle"></i> Message *</label>
              <textarea name="message" placeholder="Tell us about your project..." required>{{ old('message') }}</textarea>
            </div>

            <div class="form-bottom">
              <div class="social-row">
                <span class="slbl">Follow</span>
                <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a>
              </div>
              <button type="submit" class="btn-send">Send Message <span class="arrow-ring"><i class="fa-solid fa-arrow-right"></i></span></button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </section>

  @include('frontend.layout.footer')

  @if (session('success'))
  <script>
  Swal.fire({
    icon: 'success',
    title: 'Thank you!',
    text: '{{ session('success') }}',
    confirmButtonColor: '#f4a637',
    background: '#ffffff',
    color: '#111827'
  })
  </script>
  @endif

  @if ($errors->any())
  <script>
  Swal.fire({
    icon: 'error',
    title: 'Oops...',
    html: `{!! implode('<br>', $errors->all()) !!}`,
    confirmButtonColor: '#f4a637',
    background: '#ffffff',
    color: '#111827'
  })
  </script>
  @endif
</body>
</html>
