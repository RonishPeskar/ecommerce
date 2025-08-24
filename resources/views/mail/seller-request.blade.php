<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Seller Request</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, Helvetica, sans-serif; background-color: #f4f4f9; color: #333;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="max-width: 600px; margin: 20px auto; background-color: #ffffff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
        <!-- Header -->
        <tr>
            <td style="background-color: #4a90e2; padding: 20px; text-align: center; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                <h1 style="margin: 0; font-size: 24px; color: #ffffff;">New Seller Request</h1>
            </td>
        </tr>
        <!-- Body -->
        <tr>
            <td style="padding: 30px;">
                <p style="font-size: 16px; line-height: 1.5; margin: 0 0 20px;">
                    Dear Admin,
                </p>
                <p style="font-size: 16px; line-height: 1.5; margin: 0 0 20px;">
                    You have received a new seller request with the following details:
                </p>
                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="margin-bottom: 20px;">
                    <tr>
                        <td style="font-size: 16px; padding: 10px 0; font-weight: bold; width: 30%;">Name:</td>
                        <td style="font-size: 16px; padding: 10px 0;">{{ $data['name'] }}</td>
                    </tr>
                    <tr>
                        <td style="font-size: 16px; padding: 10px 0; font-weight: bold;">Email:</td>
                        <td style="font-size: 16px; padding: 10px 0;">{{ $data['email'] }}</td>
                    </tr>
                    <tr>
                        <td style="font-size: 16px; padding: 10px 0; font-weight: bold;">Contact Number:</td>
                        <td style="font-size: 16px; padding: 10px 0;">{{ $data['contact_number'] }}</td>
                    </tr>
                </table>
                <p style="font-size: 16px; line-height: 1.5; margin: 0 0 20px;">
Please review the request at your earliest convenience.
                </p>
                <!-- Call to Action Button -->
                <table role="presentation" cellspacing="0" cellpadding="0" style="margin: 20px auto;">
                    <tr>
                        <td style="text-align: center;">
                            <a href="{{ env('APP_URL') }}/admin" style="display: inline-block; padding: 12px 24px; background-color: #4a90e2; color: #ffffff; text-decoration: none; font-size: 16px; font-weight: bold; border-radius: 4px;">View Request</a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <!-- Footer -->
        <tr>
            <td style="background-color: #f4f4f9; padding: 20px; text-align: center; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px;">
                <p style="font-size: 14px; color: #666; margin: 0;">
                    This is an automated email. Please do not reply directly to this message.
                </p>
                <p style="font-size: 14px; color: #666; margin: 10px 0 0;">
                    &copy; 2025 Your Company Name. All rights reserved.
                </p>
            </td>
        </tr>
    </table>
</body>
</html>
