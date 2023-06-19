@extends('layouts.admin')

@section('content')
    <div class="container">
        <form action="{{ route('admin.characters.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name">name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                    required maxlength="150" minlength="3">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="attack">attack</label>
                <input type="number" class="form-control @error('attack') is-invalid @enderror" name="attack"
                    id="attack">
                @error('attack')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="defence">defence</label>
                <input type="number" class="form-control @error('defence') is-invalid @enderror" name="defence"
                    id="defence">
                @error('defence')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="speed">speed</label>
                <input type="number" class="form-control @error('speed') is-invalid @enderror" name="speed"
                    id="speed">
                @error('speed')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="life">life</label>
                <input type="number" class="form-control @error('life') is-invalid @enderror" name="life"
                    id="life">
                @error('life')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description">description</label>
                <textarea name="description" id="description" rows="10"
                    class="form-control @error('description') is-invalid @enderror"></textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class=" mb-3">
                <label for="type_id">type</label>
                <select name="type_id" id="type_id" class="form-control @error('type_id') is-invalid @enderror">
                    <option value="">Seleziona categoria</option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
                @error('type_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col form-group ">
                <p>Seleziona i Tag:</p>
                @foreach ($items as $item)
                    <div>
                        <input type="checkbox" name="items[]" value="{{ $item->id }}" class="form-check-input"
                            {{ in_array($item->id, old('items', [])) ? 'checked' : '' }}>
                        <label for="" class="form-check-label">{{ $item->name }}</label>
                    </div>
                @endforeach
                @error('items')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Save</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
        <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
        <script type="text/javascript">
            bkLib.onDomLoaded(nicEditors.allTextAreas);
        </script>
    </div>
@endsection



{{-- <template>
    <div class="container">
        <div class="card-container">

            <div class="card-background">

                <div class="card-frame">

                    <div class="frame-header">
                        <h1 class="name">Oath of Nissa</h1>
                        <!-- here goes the mana icon -->
                    </div>

                    <!-- Here goes the illustration -->

                    <div class="frame-type-line">
                        <h1 class="type">Legendary Enchantment</h1>
                        <!-- Here goes the set icon -->
                    </div>

                    <div class="frame-text-box">

                        <p class="description ftb-inner-margin">When Oath of Nissa enters the battlefield, look at the top
                            three cards of your library. You may reveal a creature, land, or planeswalker card from among
                            them and put it into your hand. Put the rest on the bottom of your library in any order. </p>

                        <p class="description">You may spend mana as though it were mana of any color to cast planeswalker
                            spells.</p>

                        <p class="flavour-text">"For the life of every plane, I will keep watch."</p>

                    </div>

                    <div class="frame-bottom-info inner-margin">
                        <div class="fbi-left">
                            <p>140/184 R</p>
                            <p>OGW &#x2022; EN <!-- paintbrush symbol --> Wesley Burt</p>
                        </div>

                        <div class="fbi-center"></div>

                        <div class="fbi-right">
                            &#x99; &amp; &#169; 2016 Wizards of the Coast
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
</template>

<script>
export default {
    name: 'SingleCharacter'
}
</script>

<style lang="scss" scoped>
.card-container {
    border: 1px solid black;
    width: 500px;
    height: 700px;
    margin: 0 auto;
    /* margin-top: 56px; */
    border-radius: 25px;
    box-sizing: border-box;
    box-shadow: -8px 9px 16px -3px gray;

    /*background: #171314; */
    .card-background {
        height: 600px;
        margin: 20px 20px 0 20px;
        border-top-left-radius: 6px;
        border-top-right-radius: 6px;
        border-bottom-left-radius: 8%;
        border-bottom-right-radius: 8%;
        background-color: #bbb;

        .card-frame {
            z-index: 1;
            position: relative;
            height: 108%;
            max-width: 97%;
            left: 1%;
            top: 0.5%;
            left: 1.2%;
            display: flex;
            flex-direction: column;

            .frame-header,
            .frame-type-line {
                border-bottom: 4px solid #a9a9a9;
                border-left: 2px solid #a9a9a9;
                border-top: 1px solid #fff;
                border-right: 1px solid #fff;
            }

            .frame-header,
            .frame-art,
            .frame-type-line {
                box-shadow:
                    0 0 0 2px #171314,
                    0 0 0 5px #26714A,
                    -3px 3px 2px 5px #171314;
                margin-bottom: 7px;
            }

            .frame-text-box {
                box-shadow:
                    0 0 0 5px #26714A,
                    -3px 3px 2px 5px #171314;
            }
        }
    }

}
</style> --}}
