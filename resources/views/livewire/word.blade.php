<div>
    <div class="card">
        <div class="card-header">
            <h5>Добавить</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-2">
                    <label for="" class="form-label">Ключ</label>
                    <input type="text" class="form-control" wire:model="key">
                </div>
                <div class="col-md-3">
                    <label for="" class="form-label">RU</label>
                    <input type="text" class="form-control" wire:model="ru">
                </div>
                <div class="col-md-3">
                    <label for="" class="form-label">UZ</label>
                    <input type="text" class="form-control" wire:model="uz">
                </div>
                <div class="col-md-3">
                    <label for="" class="form-label">EN</label>
                    <input type="text" class="form-control" wire:model="en">
                </div>
                <div class="col-md-1" style="margin-top:28px">
                    <button class="btn btn-success" wire:click='store()'>сохранить</button>
                </div>
            </div>
    
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h5>Все слова</h5>
        </div>
        <div class="card-body">
            <table class="table mb-0">

                <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Key</th>
                    <th>RU</th>
                    <th>UZ</th>
                    <th>En</th>
                    <th class="text-center">Действия</th>
                </tr>
                </thead>
                <tbody>
                <?php $k=1 ?>
                @foreach($words as $word)
                    <tr>
                        <th scope="row">{{ $k }}</th>
                        <td>
                            @if($edit != $word->id)
                                {{ $word->key }}
                            @else
                                <input type="text" class="form-control" value="{{ $word->key }}" wire:model="Key">
                            @endif
                        </td>
                        <td>
                            @if($edit != $word->id)
                                {{ $word->ru }}
                            @else
                                <input type="text" class="form-control" value="{{ $word->ru }}" wire:model="Ru">
                            @endif
                        </td>
                        <td>
                            @if($edit != $word->id)
                                {{ $word->uz }}
                            @else
                                <input type="text" class="form-control" value="{{ $word->uz }}" wire:model="Uz">
                            @endif
                        </td>
                        <td>
                            @if($edit != $word->id)
                                {{ $word->en }}
                            @else
                                <input type="text" class="form-control" value="{{ $word->en }}" wire:model="En">
                            @endif
                        </td>
                        <td class="text-center">
                            @if($edit != $word->id)
                                <button class="btn btn-success" wire:click="edit({{ $word->id }})"><i class="bx bx-pencil"></i></button>
                            @else
                                <button class="btn btn-warning" wire:click="update({{ $word->id }})"><i class="bx bx-save"></i></button>
                            @endif
                        </td>
                    </tr>
                    <?php $k++ ?>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
