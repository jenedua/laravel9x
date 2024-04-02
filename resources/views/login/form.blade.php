
@if($mensagem = @session('erro'))
    {{$mensagem}}
@endif

@if($errors->any())
    @foreach ($errors->all() as $error)
        {{ $error}} <br>
    @endforeach
@endif
<div  style="display: flex; justify-content: center; align-items: center; background-color: rgb(211, 206, 206); height: 80vh;">
    <div style="width: 400px; background-color: aliceblue; padding: 20px; text-align: center;">
        <form action="{{ route('login.auth')}}" method="POST">
            @csrf
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" style="margin-bottom: 10px;"><br>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" style="margin-bottom: 10px;"><br>
            <input type="checkbox" id="remember" name="remember" style="margin-bottom: 10px;">
            <label for="remember">Lembrar-me</label><br>
            <button type="submit" style="margin-top: 10px;">Entrar</button>
             <a href="{{route('login.create')}}"><p>ou cadastrar-se</p> </a>
        </form>
    </div>
</div>