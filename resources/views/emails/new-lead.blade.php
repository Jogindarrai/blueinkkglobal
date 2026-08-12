<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>New Lead Received</title>
</head>

<body style="margin: 0; padding: 0; background-color: #f4f4f5; font-family: Arial, Helvetica, sans-serif; color: #272235;">

    <table width="100%" cellpadding="0" cellspacing="0" border="0"
        style="width: 100%; background-color: #f4f4f5; padding: 30px 15px;">
        <tr>
            <td align="center">

                <table width="100%" cellpadding="0" cellspacing="0" border="0"
                    style="width: 100%; max-width: 650px; background-color: #ffffff; border-radius: 12px; overflow: hidden;">

                    {{-- Header --}}
                    <tr>
                        <td style="background-color: #272235; padding: 25px 30px; text-align: center;">
                            <h1 style="margin: 0; color: #ffffff; font-size: 24px; line-height: 32px;">
                                New Enquiry Received
                            </h1>

                            <p style="margin: 8px 0 0; color: #d8d6df; font-size: 14px;">
                                A new lead has been submitted on the website.
                            </p>
                        </td>
                    </tr>

                    {{-- Content --}}
                    <tr>
                        <td style="padding: 30px;">

                            <table width="100%" cellpadding="0" cellspacing="0" border="0"
                                style="width: 100%; border-collapse: collapse;">
                                {{--
                            <tr>
                                <td style="width: 35%; padding: 12px; border-bottom: 1px solid #eeeeee; font-weight: bold;">
                                    Lead ID
                                </td>
                                <td style="padding: 12px; border-bottom: 1px solid #eeeeee;">
                                    #{{ $lead->id }}
                        </td>
                    </tr> --}}

                    <tr>
                        <td style="padding: 12px; border-bottom: 1px solid #eeeeee; font-weight: bold;">
                            Name
                        </td>
                        <td style="padding: 12px; border-bottom: 1px solid #eeeeee;">
                            {{ $lead->name }}
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 12px; border-bottom: 1px solid #eeeeee; font-weight: bold;">
                            Email
                        </td>
                        <td style="padding: 12px; border-bottom: 1px solid #eeeeee;">
                            @if($lead->email)
                            <a href="mailto:{{ $lead->email }}"
                                style="color: #d7206a; text-decoration: none;">
                                {{ $lead->email }}
                            </a>
                            @else
                            N/A
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 12px; border-bottom: 1px solid #eeeeee; font-weight: bold;">
                            Phone
                        </td>
                        <td style="padding: 12px; border-bottom: 1px solid #eeeeee;">
                            <a href="tel:{{ $lead->phone }}"
                                style="color: #d7206a; text-decoration: none;">
                                {{ $lead->phone }}
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 12px; border-bottom: 1px solid #eeeeee; font-weight: bold;">
                            Country
                        </td>
                        <td style="padding: 12px; border-bottom: 1px solid #eeeeee;">
                            {{ $lead->country }}
                        </td>
                    </tr>


                    <tr>
                        <td style="padding: 12px; border-bottom: 1px solid #eeeeee; font-weight: bold;">
                            Service
                        </td>
                        <td style="padding: 12px; border-bottom: 1px solid #eeeeee;">
                            {{ $lead->service ?: 'N/A' }}
                        </td>
                    </tr>

                    {{--

                           <tr>
                                <td style="padding: 12px; border-bottom: 1px solid #eeeeee; font-weight: bold;">
                                    Form Location
                                </td>
                                <td style="padding: 12px; border-bottom: 1px solid #eeeeee;">
                                    {{ $lead->source_page === 'enquiry_modal' ? 'Enquiry Modal' : 'Contact Page' }}
            </td>
        </tr>

        <tr>
            <td style="padding: 12px; border-bottom: 1px solid #eeeeee; font-weight: bold;">
                Status
            </td>
            <td style="padding: 12px; border-bottom: 1px solid #eeeeee;">
                {{ ucfirst($lead->status ?? 'new') }}
            </td>
        </tr>
        --}}
        <tr>
            <td style="padding: 12px; border-bottom: 1px solid #eeeeee; font-weight: bold;">
                Submitted At
            </td>
            <td style="padding: 12px; border-bottom: 1px solid #eeeeee;">
                {{ $lead->created_at?->timezone('Asia/Kolkata')->format('d M Y, h:i A') ?? 'N/A' }}
            </td>
        </tr>

        <tr>
            <td style="padding: 12px; font-weight: bold; vertical-align: top;">
                Source URL
            </td>
            <td style="padding: 12px; word-break: break-word;">
                @if($lead->source_url)
                <a href="{{ $lead->source_url }}"
                    style="color: #d7206a; text-decoration: none;">
                    {{ $lead->source_url }}
                </a>
                @else
                N/A
                @endif
            </td>
        </tr>

    </table>
    {{-- Message --}}
    <div style="margin-top: 25px;">
        <h2 style="margin: 0 0 10px; font-size: 18px; color: #272235;">
            Message
        </h2>
        <div style="padding: 15px; background-color: #f8f8fa; border-left: 4px solid #d7206a; border-radius: 4px; color: #696472; line-height: 24px;">
            {!! nl2br(e($lead->message ?: 'No message provided.')) !!}
        </div>
    </div>
    </td>
    </tr>
    {{-- Footer --}}
    <tr>
        <td style="padding: 20px 30px; background-color: #f8f8fa; text-align: center; color: #696472; font-size: 13px;">
            This email was automatically generated from the website enquiry form.
        </td>
    </tr>
    </table>
    </td>
    </tr>
    </table>

</body>

</html>