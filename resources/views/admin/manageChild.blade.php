<ul>
	<?php $temp = $id; ?>
@foreach($childs as $child)
	<?php $new_name = $temp.",".$child->id; ?>
	<li>
	    {{ $child->title }}
        @if($checkbox)
        	<input type="checkbox" name="{{ $new_name }}">
        @endif
		@if(count($child->childs))
            @include('admin.manageChild',['childs' => $child->childs,'checkbox'=>true,'id'=>$category->id])
        @endif
	</li>
@endforeach
</ul>