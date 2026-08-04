<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login OTP</title>
</head>
<body style="margin:0;padding:0;background-color:#f9fafb;font-family:'Instrument Sans',ui-sans-serif,system-ui,sans-serif;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color:#f9fafb;padding:40px 0;">
        <tr>
            <td align="center">
                <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="max-width:400px;background-color:#ffffff;border-radius:12px;overflow:hidden;box-shadow:0 1px 3px rgba(0,0,0,0.1);">
                    <tr>
                        <td style="background-color:#000000;padding:24px 32px;text-align:center;">
                            <a href="{{ $siteUrl }}" style="color:#ffffff;text-decoration:none;font-size:20px;font-weight:600;letter-spacing:-0.02em;">YJ<span style="color:#10b981;">.</span></a>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:32px;">
                            <h2 style="font-size:18px;font-weight:600;color:#111827;margin:0 0 8px 0;">Your Admin Login OTP</h2>
                            <p style="font-size:14px;color:#6b7280;margin:0 0 24px 0;">Use this one-time code to sign in to your admin panel.</p>
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:24px;">
                                <tr>
                                    <td style="text-align:center;background-color:#f0fdf4;border:1px solid #dcfce7;border-radius:8px;padding:16px;">
                                        <span style="font-size:32px;font-weight:700;letter-spacing:0.3em;color:#16a34a;font-family:monospace;">{{ $otp }}</span>
                                    </td>
                                </tr>
                            </table>
                            <p style="font-size:13px;color:#9ca3af;margin:0;">This code expires in <strong style="color:#6b7280;">{{ $expiryMinutes }} minutes</strong>. Do not share this code with anyone.</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color:#f9fafb;padding:16px 32px;border-top:1px solid #e5e7eb;">
                            <p style="font-size:12px;color:#9ca3af;margin:0;text-align:center;">If you did not request this code, you can safely ignore this email.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>