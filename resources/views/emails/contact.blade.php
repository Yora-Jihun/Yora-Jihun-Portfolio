<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Contact Message</title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { border-bottom: 2px solid #16A34A; padding-bottom: 16px; margin-bottom: 24px; }
        .field { margin-bottom: 16px; }
        .label { font-size: 12px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; color: #8E8E93; margin-bottom: 4px; }
        .value { font-size: 15px; color: #111; }
        .message-box { background: #F9FAFB; border: 1px solid #E5E7EB; border-radius: 8px; padding: 16px; margin-top: 8px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 style="margin: 0; font-size: 18px; font-weight: 700;">New Contact Message</h1>
            <p style="margin: 4px 0 0; font-size: 13px; color: #8E8E93;">You received a new message from your portfolio contact form.</p>
        </div>

        <div class="field">
            <div class="label">Name</div>
            <div class="value">{{ $data['name'] }}</div>
        </div>

        <div class="field">
            <div class="label">Email</div>
            <div class="value">{{ $data['email'] }}</div>
        </div>

        <div class="field">
            <div class="label">Message</div>
            <div class="message-box">
                <p style="margin: 0; white-space: pre-wrap;">{{ $data['message'] }}</p>
            </div>
        </div>
    </div>
</body>
</html>
