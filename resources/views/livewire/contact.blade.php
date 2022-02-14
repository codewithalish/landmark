<div>


    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(session()->has('success'))
        <div class="alert alert-success">پیغام شما با موفقیت ارسال شد</div>
    @endif
    <h3 class="title">ارسال پیام</h3>
    <form wire:submit.prevent="save" class="contact-form">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-item">
                    <input type="text" wire:model.defer="contact.name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-item">
                    <input type="text" wire:model.defer="contact.mobile">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-item form-textarea">
                <textarea name="message" wire:model.defer="contact.message" cols="40" rows="10"
                          placeholder="دیدگاه شما ..."></textarea>
                </div>
            </div>
            <div class="col-md-12">
                <button class="button">ارسال پیام</button>
            </div>
        </div>
    </form>
</div>
