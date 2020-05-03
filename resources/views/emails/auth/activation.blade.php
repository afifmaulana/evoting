@component('mail::message')
# Aktivasi Akun Anda

Terima kasih Sudah Mendaftar, Mohon Aktivasi Akun Anda.

@component('mail::button', ['url' => route('adminsekolah.activate', [
                                    'token'     => $adminsekolah->activation_token,
                                    'email'     => $adminsekolah->email
                                    ])

])
Aktivasi
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
