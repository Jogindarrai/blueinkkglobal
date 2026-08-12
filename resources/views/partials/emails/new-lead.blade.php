<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <style>
        body {
            margin: 0;
            padding: 20px;
            color: #272235;
            background: #f5f5f7;
            font-family: Arial, sans-serif;
        }

        .email-card {
            max-width: 650px;
            margin: 0 auto;
            padding: 30px;
            background: #ffffff;
            border-radius: 10px;
        }

        h1 {
            margin-top: 0;
            font-size: 24px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 12px;
            border: 1px solid #dddddd;
            text-align: left;
            vertical-align: top;
        }

        th {
            width: 30%;
            background: #f5f5f7;
        }

        .message {
            white-space: pre-line;
        }
    </style>
</head>

<body>
    <div class="email-card">
        <h1>New Website Lead Received</h1>

        <table>
            <tr>
                <th>Name</th>
                <td>{{ $lead->name }}</td>
            </tr>

            <tr>
                <th>Email</th>
                <td>
                    @if($lead->email)
                        <a href="mailto:{{ $lead->email }}">
                            {{ $lead->email }}
                        </a>
                    @else
                        Not provided
                    @endif
                </td>
            </tr>

            <tr>
                <th>Phone</th>
                <td>{{ $lead->phone ?: 'Not provided' }}</td>
            </tr>

            <tr>
                <th>Country</th>
                <td>{{ $lead->country ?: 'Not provided' }}</td>
            </tr>

            <tr>
                <th>Service</th>
                <td>{{ $lead->service ?: 'Not provided' }}</td>
            </tr>

            <tr>
                <th>Message</th>
                <td class="message">
                    {{ $lead->message ?: 'Not provided' }}
                </td>
            </tr>

            <tr>
                <th>Source</th>
                <td>{{ $lead->source_page ?: 'Not available' }}</td>
            </tr>

            <tr>
                <th>Submitted Page</th>
                <td>
                    @if($lead->source_url)
                        <a href="{{ $lead->source_url }}">
                            {{ $lead->source_url }}
                        </a>
                    @else
                        Not available
                    @endif
                </td>
            </tr>

            <tr>
                <th>Status</th>
                <td>{{ ucfirst($lead->status) }}</td>
            </tr>

            <tr>
                <th>Received At</th>
                <td>
                    {{ $lead->created_at->format('d M Y, h:i A') }}
                </td>
            </tr>
        </table>
    </div>
</body>
</html>