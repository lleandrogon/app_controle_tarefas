<x-mail::message>
# Introdução

O corpo da mensagem.

- Opção 1
- Opção 2
- Opção 3

<x-mail::button :url="''">
Texto do Botão 1
</x-mail::button>

<x-mail::button :url="''">
Texto do Botão 2
</x-mail::button>

Obrigadoe,<br>
{{ config('app.name') }}
</x-mail::message>
