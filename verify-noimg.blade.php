<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>Potwierdź subskrypcję</title>

  <style>
    #ebody {
      float: left;
      width: 100%;
      font-size: 16px;
      min-height: 100%;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Open Sans', 'Google Sans', Roboto, Oxygen, Ubuntu, Cantarell, Poppins, Arial, Helvetica, 'Helvetica Neue', monospace, sans-serif;
      color: #333;
      background: #fafafa;
      /* background: url('https://raw.githubusercontent.com/atomjoy/signatures/refs/heads/main/img/bg5.png') center / cover no-repeat; */
      /* background: url('https://raw.githubusercontent.com/atomjoy/icons/refs/heads/main/laptop/mac3.webp') center / cover no-repeat; */
      /* background-image: url('https://raw.githubusercontent.com/atomjoy/icons/refs/heads/main/laptop/mac3.webp');
      background-position: center;
      background-size: cover; */
    }

    #ebody img {
      display: inline-block;
      max-width: 100%;
      border: 0px;
    }

    #ebody a {
      font-size: 16px;
      color: #0070bb;
      text-decoration: none;
    }

    #ebody .h1 {
      font-size: 20px;
      font-weight: 700;
      color: #000;
    }

    #ebody .email-button:hover {
      background: #7dd100 !important;
      transition: all .6s;
    }

    @media screen and (max-device-width:640px),
    screen and (max-width:640px) {
      .w100pc {
        width: 100% !important;
        min-width: 100% !important;
        max-width: 1000px !important;
        height: auto !important;
      }
    }
  </style>
</head>

<body id="ebody" style="margin:0px; padding:0;">

  <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
         bgcolor="transparent">
    <tr>
      <td align="center">
        {{-- Header --}}
        <table width="90%" cellpadding="0" cellspacing="0" bgcolor="transparent"
               style="padding-bottom:10px;max-width:600px;margin-top:90px;">
          <tr>
            <td align="right">
              {{-- <a href="{{ $verificationUrl }}" style="font-size:12px;color:#999;">
                Potwierdzam subskrypcję
              </a> --}}
            </td>
          </tr>
        </table>

        {{-- Content --}}
        <table role="presentation" width="90%" cellpadding="0" cellspacing="0"
               bgcolor="#ffffff"
               style="padding:25px;width:90%;max-width:600px;border-radius:6px;border-bottom:3px solid #000;">
          <tr>
            <td align="center">
              <img src="https://avatars.githubusercontent.com/u/112067799"
                   alt="Logo" height="90"
                   style="display:block;margin-bottom:20px;border-radius: 50%;">
            </td>
          </tr>

          <tr>
            <td>
              <p class="h1">Witaj {{ $subscriber->name ?? 'Subskrybencie' }}!</p>
              <p>{{ $content ?? "Dziękujemy za chęć zapisu do naszego newslettera. Aby aktywować subskrypcję i zacząć otrzymywać wiadomości, kliknij w poniższy przycisk." }}</p>
            </td>
          </tr>

          <tr>
            <td align="center" style="padding:20px;">
              <div style="margin: 30px 0px 60px 0px;">
                <a href="{{ $verificationUrl }}" class="email-button" target="_blank"
                  style="background:#000;color:#fff;font-size:16px;font-weight:600;padding:11px 25px;text-decoration:none;border-radius:6px;">
                  Potwierdzam subskrypcję
                </a>
              </div>

              <p style="font-size: 12px; color: #718096;">
                  Jeśli przycisk nie działa, skopiuj i wklej ten link w okno przeglądarki:<br>
                  <a href="{{ $verificationUrl }}" target="_blank">{{ $verificationUrl }}</a>
              </p>
            </td>
          </tr>

          <tr>
            <td>
              <hr style="border: 0; border-top: 1px solid #e2e8f0; margin: 20px 0;">

              <p style="font-size: 12px; color: #a0aec0;">Ta wiadomość została wysłana automatycznie. Jeśli to nie Ty się zapisywałeś, możesz zignorować tego maila.</p>
            </td>
          </tr>
        </table>

        {{-- Footer --}}
        <table width="90%" cellpadding="0" cellspacing="0" bgcolor="transparent"
               style="padding:25px;max-width:600px;margin-bottom:90px;color:#999;font-size:12px;">
          <tr>
            <td align="center" style="padding-top:20px;">
              <a href="https://example.com">
                <img src="https://raw.githubusercontent.com/atomjoy/signatures/refs/heads/main/img/social-black/facebook.png"
                     alt="img" width="30px" style="border-radius: 50%;">
              </a>
              <a href="https://example.com">
                <img src="https://raw.githubusercontent.com/atomjoy/signatures/refs/heads/main/img/social-black/twitter.png"
                     alt="img" width="30px" style="border-radius: 50%;">
              </a>
              <a href="https://example.com">
                <img src="https://raw.githubusercontent.com/atomjoy/signatures/refs/heads/main/img/social-black/linkedin.png"
                     alt="img" width="30px" style="border-radius: 50%;">
              </a>
            </td>
          </tr>

          <tr>
            <td align="center" style="padding-top:20px;">
              Regards © 2026 {{ config('app.name', '') }}
            </td>
          </tr>
        </table>

      </td>
    </tr>
  </table>

</body>

</html>
