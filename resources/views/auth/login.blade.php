<x-layout>

    <x-page-heading>Login</x-page-heading>

    <x-forms.form method="POST" action="/login" enctype="multipart/form-data">

    <x-forms.input name="email" label="email" type="email"></x-forms.input>
    <x-forms.input name="password" label="password" type="password"></x-forms.input>

    <x-forms.divider></x-forms.divider>
    <x-forms.button>Login</x-forms.button>
    </x-forms.form>
</x-layout>