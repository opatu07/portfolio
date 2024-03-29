<x-layout>
    <x-setting heading="ダッシュボード">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($posts as $post)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="text-sm font-medium text-gray-900">
                                                    <a href="/posts/{{ $post->slug }}">
                                                        {{ $post->title }}
                                                    </a>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="/admin/posts/{{ $post->id }}/edit" class="text-orange-500 hover:text-orange-600">記事を編集する</a>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium text-gray-400"> 
                                            <form class="id">
                                                <input data-post_id="{{$post->id}}" type="submit" class="btn btn-danger btn-dell" value="記事を削除する">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                            <script type="text/javascript">
                                $.ajaxSetup({
                                    headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                    }
                                });

                                $(function() {
                                    $('.btn-danger').on('click', function() {
                                    var deleteConfirm = confirm('削除してよろしいでしょうか？');
                                    
                                    if(deleteConfirm == true) {
                                        var clickEle = $(this)
                                        var postID = clickEle.attr('data-post_id');

                                        $.ajax({
                                            type: 'POST',
                                            url: '/admin/posts/'+postID, //userID にはレコードのIDが代入されています
                                            dataType: 'json',
                                            data: {'id':postID},
                                            })
                                                        //”削除しても良いですか”のメッセージで”いいえ”を選択すると次に進み処理がキャンセルされます
                                        }
                                    else {
                                        (function(e) {
                                            e.preventDefault()
                                        });
                                    };
                                });
                                });
                            </script>
                    </div>
                </div>
            </div>
        </div>
    </x-setting>
</x-layout>
