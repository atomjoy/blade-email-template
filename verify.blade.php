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
      /* background-image: url('https://raw.githubusercontent.com/atomjoy/icons/refs/heads/main/laptop/mac3.webp');
      background-position: center;
      background-size: cover; */
    }

    table img {
      display: inline-block;
      max-width: 100%;
      border: 0px;
    }

    table a {
      font-size: 16px;
      color: #0070bb;
      text-decoration: none;
    }

    .atomjoy-mail-h1 {
      font-size: 20px;
      font-weight: 700;
      color: #000;
    }

    .atomjoy-mail-bg {
      background: #fafafa;
    }

    .atomjoy-mail-button:hover {
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

<body style="margin:0px; padding:0;">

  <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
         bgcolor="transparent" id="ebody">
    <tr>
      <td align="center">
        {{-- Header --}}
        <table width="90%" cellpadding="0" cellspacing="0" bgcolor="transparent"
               style="padding-bottom:10px;max-width:600px;margin-top:90px;">
          <tr>
            <td align="center">
              <img src="https://avatars.githubusercontent.com/u/112067799"
                   alt="" height="90"
                   style="display:block;margin-bottom:20px;border-radius: 50%;">
            </td>
          </tr>
          <tr>
            <td align="right">
              {{-- <a href="{{ $verificationUrl }}" style="font-size:12px;color:#999;">
                Zobacz w przeglądarce
              </a> --}}
            </td>
          </tr>
        </table>

        {{-- Content --}}
        <table role="presentation" width="90%" cellpadding="0" cellspacing="0"
               bgcolor="#ffffff"
               style="background: #fff;padding:25px;width:90%;max-width:600px;border-radius:6px;border-bottom:3px solid #000;">
          <tr>
            <td align="center">
              <img src="https://raw.githubusercontent.com/atomjoy/blade-email-template/refs/heads/main/banner.webp"
                   alt="" width="100%"
                   style="display:block;margin-bottom:20px;border-radius: 10px;">
            </td>
          </tr>

          <tr>
            <td>
              <p class="atomjoy-mail-h1">Witaj {{ $subscriber->name ?? 'Subskrybencie' }}!</p>
              <p>{{ $content ?? "Dziękujemy za chęć zapisu do naszego newslettera. Aby aktywować subskrypcję i zacząć otrzymywać wiadomości, kliknij w poniższy przycisk." }}</p>
            </td>
          </tr>

          <tr>
            <td align="center" style="padding:20px;">
              <div style="margin: 30px 0px 60px 0px;">
                <a href="{{ $verificationUrl }}" class="atomjoy-mail-button" target="_blank"
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
              @if (config('social.profiles.facebook'))
              <a href="{{ config('app.url', '') . '/redirect/social/facebook' }}?utm_source=newsletter&utm_medium=email&utm_campaign=footer_links" target="_blank">
                <img src="https://raw.githubusercontent.com/atomjoy/signatures/refs/heads/main/img/social-black/facebook.png"
                     alt="img" width="30px" style="border-radius: 50%;">
              </a>
              @endif
              @if (config('social.profiles.x'))
              <a href="{{ config('app.url', '') . '/redirect/social/x' }}?utm_source=newsletter&utm_medium=email&utm_campaign=footer_links" target="_blank">
                <img src="https://raw.githubusercontent.com/atomjoy/signatures/refs/heads/main/img/social-black/twitter.png"
                     alt="img" width="30px" style="border-radius: 50%;">
              </a>
              @endif
              @if (config('social.profiles.linkedin'))
              <a href="{{ config('app.url', '') . '/redirect/social/linkedin' }}?utm_source=newsletter&utm_medium=email&utm_campaign=footer_links" target="_blank">
                <img src="https://raw.githubusercontent.com/atomjoy/signatures/refs/heads/main/img/social-black/linkedin.png"
                    alt="img" width="30px" style="border-radius: 50%;">
              </a>
              @endif
              @if (config('social.profiles.youtube'))
              <a href="{{ config('app.url', '') . '/redirect/social/youtube' }}?utm_source=newsletter&utm_medium=email&utm_campaign=footer_links" target="_blank">
                <img src="https://raw.githubusercontent.com/atomjoy/signatures/refs/heads/main/img/social-black/youtube.png"
                     alt="img" width="30px" style="border-radius: 50%;">
              </a>
              @endif
            </td>
          </tr>

          <tr>
            <td align="center" style="padding-top:20px;">
              Pozdrawiamy © 2026 {{ config('app.name', '') }}
            </td>
          </tr>
        </table>

      </td>
    </tr>
  </table>

</body>

</html>
