<div class="row mb-1">
    @foreach ($attributes as $attr)
        @php
            $value = null;
            if (isset($product)) {
                if ($old = $product->attributes->where('key', $attr->slug)->first()) {
                    $value = $old->value;
                }
            }
        @endphp
        @if ($attr->type == 'text')
            <div class="col-md-4">
                <label class="form-label" for="{{ $attr->slug }}">{{ $attr->title }}</label>
                <input type="text" name="attributes[{{ $attr->slug }}]" id="{{ $attr->slug }}" class="form-control"
                    value="{{ $value }}" />
            </div>
        @else
            <div class="col-md-4">
                <label class="form-label" for="{{ $attr->slug }}">{{ $attr->title }}</label>
                <select name="attributes[{{ $attr->slug }}]" id="{{ $attr->slug }}" class="form-select select2">
                    <option value="">Select Value</option>
                    @forelse (json_decode($attr->options) as $option)
                        <option value="{{ $option }}" {{ $value == $option ? 'selected' : '' }}>
                            {{ $option }}
                        </option>
                    @empty
                    @endforelse
                </select>
            </div>
        @endif
    @endforeach
</div>
