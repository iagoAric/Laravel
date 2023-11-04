@csrf
    <input type="text" name="name" placeholder="Nome" value="{{ $contato->name ?? old ('name')}}" class="form-control  text-black bg-white ">
    <input type="text" name="ramal" placeholder="Ramal" value="{{ $contato->ramal ?? old ('ramal')}}"class="form-control text-black bg-white ">
    <input type="text" name="coordenacao" placeholder="Coordenação" value="{{ $contato->coordenacao?? old ('coordenacao')}}"class="form-control text-black bg-white">
    <input type="text" name="instituto" placeholder="Instituto"value="{{ $contato->instituto ?? old ('instituto')}}"class="form-control text-black bg-white">
    <button type="submit" class="w-full shadow bg-red-500 text-white font-bold py-2 px-4 rounded">
        Enviar
    </button>