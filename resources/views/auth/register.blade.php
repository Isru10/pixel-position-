<x-layout>

    <x-page-heading>Register</x-page-heading>

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">

    <x-forms.input name="name" label="name"  ></x-forms.input>
    <x-forms.input name="email" label="email" type="email"></x-forms.input>
    <x-forms.input name="password" label="password" type="password"></x-forms.input>
    <x-forms.input name="password_confirmation" label="password_confirmation" type="password"></x-forms.input>

    <x-forms.divider></x-forms.divider>
    <x-forms.input name="employer" label="Employer name"></x-forms.input>
    <x-forms.input name="logo" label="Employer logo" type="file"></x-forms.input>


    <x-forms.button>Create Account</x-forms.button>

    </x-forms.form>
</x-layout>