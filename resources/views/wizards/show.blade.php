@include('layouts.header-contents')
<div>
    <div style="display: flex">
        <h1>{{ $wizard->name }}</h1>
        @if ($wizard->wizard)
            <img src="{{ asset('images/wizard-hat_3.jpg') }}" style="max-height: 50px; margin-top: auto; margin-bottom: auto" />
        @endif
    </div>
    <p>{{ $wizard->name }} is currently {{ $wizard->wizard ? "" : "not" }} a wizard.</p>
</div>
@include('layouts.footer-contents')