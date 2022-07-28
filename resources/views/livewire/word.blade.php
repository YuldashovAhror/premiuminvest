<div>
    <div class="card">
        <div class="card-header">
            <h5>Словарь</h5>
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
</div>
