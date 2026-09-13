<x-mail::message>
# New project inquiry

**Name:** {{ $data['name'] }}

**Email:** {{ $data['email'] }}

**Project Type:** {{ $data['projectType'] }}

**Message:**

{{ $data['message'] }}

<x-mail::button :url="'mailto:' . $data['email']">
Reply to {{ $data['name'] }}
</x-mail::button>

Sent from the contact form at {{ config('app.url') }}.
</x-mail::message>
