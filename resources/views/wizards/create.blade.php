@include('layouts.header-contents')
<h1>Create a new Wizard</h1>

<form method="POST" action="{{ route('wizards.store') }}">
    @csrf

    <div>
        <label for="name">Name</label>
        <input id="name" type="text" name="name" required autofocus />
    </div>

    <div>
        <label for="wizard">Are they a wizard?</label>
        <input id="wizard" type="checkbox" name="wizard" />
    </div>

    <input id="submit" type="submit" value="Create" />
</form>
@include('layouts.footer-contents')