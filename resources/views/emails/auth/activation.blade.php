@component('mail::message')
<h5># Aktivasi Akun Anda </h5>

<p>Terima kasih Sudah Mendaftar, Mohon Aktivasi Akun Anda.</p>

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
