<x-mail::message>
# Pesan Baru dari Kontak Website

**Nama:** {{ $data['name'] }}
**Email:** {{ $data['email'] }}
**Subjek:** {{ $data['subject'] }}

**Pesan:**
{{ $data['message'] }}

Terima Kasih,<br>
{{ config('app.name') }}
</x-mail::message>
