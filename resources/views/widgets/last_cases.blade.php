<div class="widget">
    <h3 class="widget-title">ملک های اخیر</h3>
    <div class="recent-property-wrap">
        @foreach($caseWidget as $item)
        <div class="recent-property-item">
            <div class="thumbnail">
                <a href="/cases/{{$item->id}}" title="{{$item->title}}">
                    <img src="{{$item->avatar_path ?? '/landmark/images/property/thumb/property_3.jpg'}}" alt="Villa on Hollywood Boulevard">
                </a>
            </div>
            <div class="content">
                <div class="item-title">
                    <a href="/cases/{{$item->id}}" title="{{$item->title}}">
                        {{$item->title}}
                    </a>
                </div>
                <div class="price">
                    <span class="amount">{{$item->price}} تومان</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
