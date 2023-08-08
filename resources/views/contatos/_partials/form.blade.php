@csrf
    <input type="text" name="name" placeholder="Nome" value="{{ $contato->name ?? old ('name')}}">
    <input type="text" name="ramal" placeholder="Ramal" value="{{ $contato->ramal ?? old ('ramal')}}">
    <input type="text" name="coordenacao" placeholder="Coordenação" value="{{ $contato->coordenacao?? old ('coordenacao')}}">
    <input type="text" name="instituto" placeholder="Instituto"value="{{ $contato->instituto ?? old ('instituto')}}">
    <button type="submit">
        Enviar
    </button>