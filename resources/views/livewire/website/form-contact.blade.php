<section class="container"  style="padding-top: 100px;"> 
    <div class="row">
        <div class="col-12 form-title">
            <h1 style="color: #ffd770;">Si vous avez des questions</h1>
            <h2>N'hesitez pas a nous contacez.</h2>
        </div>
        <div class="col-12 form-content" style="margin-top: 3rem; text-align: center;">
            <form class="mx-auto formulaire" style="max-width: 700px;">
                <input class="form-control mb-4 p-3" wire:model="form.name" type="text" placeholder="Votre nom">
                @error('form.name') <span class="error">{{ $message }}</span> @enderror

                <input class="form-control mb-4 p-3" wire:model="form.email" type="email" placeholder="Votre email">
                @error('form.email') <span class="error">{{ $message }}</span> @enderror

                <input class="form-control mb-4 p-3" wire:model="form.subject" type="text" placeholder="Votre sujet">
                @error('form.subject') <span class="error">{{ $message }}</span> @enderror

                <textarea class="form-control mb-4 p-3" wire:model="form.message"  cols="30" rows="10" placeholder="Message"></textarea>
                @error('form.message') <span class="error">{{ $message }}</span> @enderror

            </form>
            <button class="button" wire:click="sendForm">Envoyer</button>
        </div>
    </div>
</section>