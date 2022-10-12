index fornecedor blade



@isset($fornecedores)
    @if(count($fornecedores) > 0 && count($fornecedores) < 10)
        <h2>Tem fornecedores</h2>
    @elseif(count($fornecedores) > 10)
        <h2>Existe muitos fornecedores</h2>
    @else
        <h2>não existe fornecedores no momento</h2>
    @endif
    {{ count($fornecedores) }}

    @isset($fornecedores)
        <h1>BLADE - FOR</h1>
        @for($i = 0; isset($fornecedores[$i]); $i++) 
        
            <p>CNPJ: @empty($fornecedores[$i]['cnpj']) Vazio @endempty {{$fornecedores[$i]['cnpj']}}</p>
            <p>CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Não informado'}}</p>
            <p>Telefone {{ $fornecedores[$i]['ddd'] ?? '' }} {{ $fornecedores[$i]['telefone'] ?? '' }}</p>
            <p>
                @switch($fornecedores[$i]['ddd'])
                    @case('11')
                        Cidade 1
                        @break
                    @case('14')
                        Cidade 2
                        @break
                    @default
                        Cidade padrão
                @endswitch
            </p>
            
            <hr><br>
        @endfor
        <h1>BLADE FOREACH</h1>
        @foreach($fornecedores as $i => $fornecedor)
            Iteração atual: {{ $loop->iteration }}
            <p>CNPJ: @empty($fornecedor['cnpj']) Vazio @endempty {{$fornecedor['cnpj']}}</p>
            <p>CNPJ: {{ $fornecedor['cnpj'] ?? 'Não informado'}}</p>
            <p>Telefone {{ $fornecedor['ddd'] ?? '' }} {{ $fornecedor['telefone'] ?? '' }}</p>
            <p>
                @switch($fornecedor['ddd'])
                    @case('11')
                        Cidade 1
                        @break
                    @case('14')
                        Cidade 2
                        @break
                    @default
                        Cidade padrão
                @endswitch
            </p>
            <hr><br>
        @endforeach
            <h1>BLADE - FORELSE</h1>
        @forelse($fornecedores as $i => $fornecedor)
            <p>CNPJ: @empty($fornecedor['cnpj']) Vazio @endempty {{$fornecedor['cnpj']}}</p>
            <p>CNPJ: {{ $fornecedor['cnpj'] ?? 'Não informado'}}</p>
            <p>Telefone {{ $fornecedor['ddd'] ?? '' }} {{ $fornecedor['telefone'] ?? '' }}</p>
            <p>
                @switch($fornecedor['ddd'])
                    @case('11')
                        Cidade 1
                        @break
                    @case('14')
                        Cidade 2
                        @break
                    @default
                        Cidade padrão
                @endswitch
            </p>
            <hr><br>
        @empty
            Não há registro
        @endforelse
    @endisset

@endisset 





