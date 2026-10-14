{{-- https://raw.githubusercontent.com/atomjoy/icons/refs/heads/main/laptop/mac3.webp --}}
<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8" />
  <title>Promocja</title>

  <style>
    #atomjoy-body {
      float: left;
      width: 100%;
      font-size: 16px;
      min-height: 100%;
      font-family: Poppins, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Open Sans', 'Google Sans', Roboto, Oxygen, Ubuntu, Cantarell, Arial, Helvetica, 'Helvetica Neue', monospace, sans-serif;
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

    table a:hover {
      color: #7dd100;
    }

    .atomjoy-mail-h1 {
      font-size: 20px;
      font-weight: 700;
      color: #000;
    }

    .atomjoy-mail-h2 {
      font-size: 25px;
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

    .atomjoy-product {
      border: 0px;
      box-sizing: border-box;
      min-width: 32.3%;
      max-width: 32.3%;
      margin-top: 30px;
      margin-right: 1%;
    }

    .atomjoy-product:nth-child(3n) {
        margin-right: 0px;
    }

    a.atomjoy-product-btn {
      background: #000;
      padding: 5px 10px;
      border-radius: 3px;
      color: #ffffff;
    }

    a.atomjoy-product-btn:hover {
      background: #7dd100;
      color: #ffffff;
    }

    @media screen and (max-device-width:640px),
    screen and (max-width:640px) {
      .atomjoy-product {
        width: 48%;
        min-width: 48%;
        max-width: 48%;
      }
      .atomjoy-product:nth-child(3n) {
        margin-right: 1%;
    }
      .atomjoy-product:nth-child(2n) {
        margin-right: 0px;
      }
    }

    @media screen and (max-device-width:480px),
    screen and (max-width:480px) {
      .atomjoy-product {
        width: 100%;
        min-width: 100%;
        max-width: 100%;
        margin-right: 0px;
      }

      .w100pc {
        width: 100% !important;
        min-width: 100% !important;
        max-width: 100% !important;
        height: auto !important;
      }
    }
  </style>
</head>

<body style="margin:0px; padding:0;">

  <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
         bgcolor="transparent" id="atomjoy-body">
    <tr>
      <td align="center">
        {{-- Header --}}
        <table width="90%" cellpadding="0" cellspacing="0" bgcolor="transparent"
               style="padding-bottom:10px;max-width:660px;margin-top:90px;">
          <tr>
            <td align="center">
              <img src="https://avatars.githubusercontent.com/u/112067799"
                   alt="" height="90"
                   style="display:block;margin-bottom:20px;border-radius: 50%;">
            </td>
          </tr>
          <tr>
            <td align="right">
              <a href="{{ $url }}" style="font-size:12px;color:#999;">
                Zobacz w przeglądarce
              </a>
            </td>
          </tr>
        </table>

        {{-- Content --}}
        <table role="presentation" width="90%" cellpadding="0" cellspacing="0"
               bgcolor="#ffffff"
               style="background: #fff;padding:25px;width:90%;max-width:660px;border-radius:6px;border-bottom:3px solid #000;">
          <tr>
            <td align="center">
              <img src="https://raw.githubusercontent.com/atomjoy/blade-email-template/refs/heads/main/banner.webp"
                   alt="" width="100%"
                   style="display:block;margin-bottom:20px;border-radius: 10px;">
            </td>
          </tr>

          <tr>
            <td>
              <p class="atomjoy-mail-h1">Witaj {{ $user->name ?? 'Kliencie' }}!</p>
              <p>{{ $content ?? "To nasza codzienna porcja świeżych informacji dla Ciebie." }}</p>
            </td>
          </tr>

          {{-- <tr>
            <td align="center" style="padding:20px;">
              <div style="margin: 30px 0px">
                <a href="{{ $url }}" class="atomjoy-mail-button" target="_blank"
                  style="background:#000;color:#fff;font-size:16px;font-weight:660;padding:11px 25px;text-decoration:none;border-radius:6px;">
                  Promocje
                </a>
              </div>
            </td>
          </tr> --}}

          <tr>
            <td align="center" style="padding:0px;">
              {{-- <p class="atomjoy-mail-h2">Promocje</p> --}}
              <div style="float: left; width: 100%; max-width: 100%; margin: 0px; display: block;">
                @foreach($products as $product)
                    <div style="float: left; box-sizing: border-box;" class="atomjoy-product">
                        <img src="{{ $product['image'] }}"
                            alt="{{ $product['title'] }}"
                            width="100%"
                            style="display:block;margin-bottom:20px;border-radius: 5px;">
                        <p>{{ $product['title'] }}</p>
                        <a href="{{ $product['url'] }}" target="_blank" class="atomjoy-product-btn">
                            {{ $product['price'] }}
                        </a>
                    </div>
                @endforeach
              </div>
            </td>
          </tr>

          <tr>
            <td>
              <hr style="border: 0; border-top: 1px solid #fafafa; margin: 20px 0;">
              <p>Pozdrawiamy!</p>
            </td>
          </tr>
        </table>

        {{-- Footer --}}
        <table width="90%" cellpadding="0" cellspacing="0" bgcolor="transparent"
               style="padding:25px;max-width:660px;margin-bottom:90px;color:#999;font-size:12px;">
          <tr>
            <td align="center" style="padding-top:20px;">
              @if (config('social.profiles.facebook'))
              <a href="{{ config('app.url', '') . '/redirect/social/facebook' }}?utm_source=newsletter&utm_medium=email&utm_campaign=footer_links" target="_blank">
                <img src="https://raw.githubusercontent.com/atomjoy/blade-email-template/refs/heads/main/icons/facebook.png"
                     alt="img" width="30px" style="border-radius: 50%;">
              </a>
              @endif
              @if (config('social.profiles.x'))
              <a href="{{ config('app.url', '') . '/redirect/social/x' }}?utm_source=newsletter&utm_medium=email&utm_campaign=footer_links" target="_blank">
                <img src="https://raw.githubusercontent.com/atomjoy/blade-email-template/refs/heads/main/icons/x.png"
                     alt="img" width="30px" style="border-radius: 50%;">
              </a>
              @endif
              @if (config('social.profiles.linkedin'))
              <a href="{{ config('app.url', '') . '/redirect/social/linkedin' }}?utm_source=newsletter&utm_medium=email&utm_campaign=footer_links" target="_blank">
                <img src="https://raw.githubusercontent.com/atomjoy/blade-email-template/refs/heads/main/icons/linkedin.png"
                    alt="img" width="30px" style="border-radius: 50%;">
              </a>
              @endif
              @if (config('social.profiles.youtube'))
              <a href="{{ config('app.url', '') . '/redirect/social/youtube' }}?utm_source=newsletter&utm_medium=email&utm_campaign=footer_links" target="_blank">
                <img src="https://raw.githubusercontent.com/atomjoy/blade-email-template/refs/heads/main/icons/youtube.png"
                     alt="img" width="30px" style="border-radius: 50%;">
              </a>
              @endif
              @if (config('social.profiles.tiktok'))
              <a href="{{ config('app.url', '') . '/redirect/social/tiktok' }}?utm_source=newsletter&utm_medium=email&utm_campaign=footer_links" target="_blank">
                <img src="https://raw.githubusercontent.com/atomjoy/blade-email-template/refs/heads/main/icons/tiktok.png"
                     alt="img" width="30px" style="border-radius: 50%;">
              </a>
              @endif
              @if (config('social.profiles.behance'))
              <a href="{{ config('app.url', '') . '/redirect/social/behance' }}?utm_source=newsletter&utm_medium=email&utm_campaign=footer_links" target="_blank">
                <img src="https://raw.githubusercontent.com/atomjoy/blade-email-template/refs/heads/main/icons/behance.png"
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
