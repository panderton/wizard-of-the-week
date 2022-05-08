@include('layouts.header-contents')
<form method="post" action="{{ route('wizards.update', $wizard->id) }}">
    @csrf
    @method('put')
    <div>
        <label for="name">Name</label>
        <input id="name" type="text" name="name" value="{{ $wizard->name }}" required autofocus />
    </div>

    <div>
        <label for="wizard">Are they a wizard?</label>
        <input id="wizard" type="checkbox" name="wizard" />
    </div>

    <input id="submit" type="submit" value="Edit" />
</form>
@include('layouts.footer-contents')