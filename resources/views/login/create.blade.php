
@if($errors->any())
    @foreach ($errors->all() as $error)
        {{ $error}} <br>
    @endforeach
@endif
<div  style="display: flex; justify-content: center; align-items: center; background-color: rgb(211, 206, 206); height: 80vh;">
    <div style="width: 400px; background-color: aliceblue; padding: 20px; text-align: center;">
        <form action="{{ route('users.store')}}" method="POST">
            @csrf
            <label for="nome">Nome:</label>
            <input type="text"  name="firstName" style="margin-bottom: 10px;"><br>
            <label for="nome">Sobrenome:</label>
            <input type="text"  name="lastName" style="margin-bottom: 10px;"><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" style="margin-bottom: 10px;"><br>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" style="margin-bottom: 10px;"><br>
            <button type="submit" style="margin-top: 10px;">Cadastrar</button>
        </form>
    </div>
</div>