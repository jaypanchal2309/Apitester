<style><?php echo file_get_contents($bootstrapCss); ?></style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('API Testing') }}</div>
  
                <div class="card-body">
                
                    <form id="onlineApiTest2309">
					<input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="">
                            <div class="col-lg-12">
                                <div class="row2309">
                                    <div class="form-group mb-3">
                                        <label for="exampleInputUrl">Url</label>
                                        <input type="url" name="url" class="form-control" id="exampleInputUrl" placeholder="https://">
                                        <small  class="form-text text-muted">You need to Provide the API endpoint which you need to check.</small>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="exampleInputUrl">Method</label>
                                        <select name="apiMethod" class="form-control" id="exampleFormControlSelect1">
                                            <option value="get">GET</option>
                                            <option value="post">POST</option>
                                            <option value="delete">DELETE</option>
                                            <option value="patch">PATCH</option>
                                            <option value="put">PUT</option>
                                        </select>
                                        <small  class="form-text text-muted">Method of API you want to call.</small>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="exampleInputUrl">Headers</label>
                                        <small  class="form-text text-muted">You can pass your headers from here</small>
                                    </div>
                                    <div class="form-group input-group mb-3">
                                        <div class="input-group-prepend">
                                           
                                        </div>
                                        
                                        <input type="text" name="api_headers[0][key]" placeholder="KEY" class="form-control m-input">
                                        <textarea rows="1" name="api_headers[0][value]" placeholder="VALUE" class="form-control m-input ml-2"></textarea>
                                        <!-- <input type="text" name="api_headers[0][value]" placeholder="VALUE" class="form-control m-input"> -->
                                    </div>
                                </div>
            
                                <div id="newHeader2309"></div>
                                <button id="headerAdder2309" type="button"
                                    class="btn btn-dark">
                                    <span class="bi bi-plus-square-dotted">
                                    </span> ADD new Header
                                </button>

                                <div class="row2309 mt-5">
                                    <div class="form-group mb-3">
                                        <label for="exampleInputUrl">Parameters</label>
                                        <small  class="form-text text-muted">You can pass your parameters from here</small>
                                    </div>
                                    <div class="form-group input-group mb-3">
                                        <div class="input-group-prepend">
                                            
                                        </div>
                                        
                                        <input type="text" name="api_params[0][key]" placeholder="KEY" class="form-control m-input">
                                        <textarea rows="1" name="api_params[0][value]" placeholder="VALUE" class="form-control m-input ml-2"></textarea>
                                    </div>
                                </div>

                                <div id="newParam2309"></div>
                                <button id="paramAdder" type="button"
                                    class="btn btn-dark">
                                    <span class="bi bi-plus-square-dotted">
                                    </span> ADD new Parameter
                                </button>
                            </div>
            
                                
                                <div class="mt-5 border-top border-secondary">
                                    <button type="submit" class="btn btn-primary mt-4">Call API</button>
                                </div>
                            </div>
                        
                        
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-header">{{ __('API Output') }}</div>
  
                <div class="card-body">
                    <div id="apiOutput2309"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script><?php echo file_get_contents($jQueryJs); ?></script>
<script><?php echo file_get_contents($blockUIJs); ?></script>
<script>
    $("#onlineApiTest2309").submit(function(e) {

        e.preventDefault();

        var form = $(this);
        var actionUrl = "{{url('jp2309-hit-api')}}";
        $.blockUI();
        $.ajax({
            type: "POST",
            url: actionUrl,
            data: form.serialize(),
            success: function(data)
            {
                
                var jsonPretty = JSON.stringify(data,undefined, 2);
                $('#apiOutput2309').html("<pre>"+jsonPretty+"</pre>");
                $.unblockUI();
                document.getElementById('apiOutput2309').scrollIntoView({behavior: "smooth"});
            },
            error: function (error) {
                $.unblockUI();
                $('#apiOutput2309').html("<pre>Error!!!</pre>");
                document.getElementById('apiOutput2309').scrollIntoView({behavior: "smooth"});
            }
        });

    });

    $("#headerAdder2309").click(function () {
        var count = $('#newHeader2309 .row2309').length;
        count++;
        newRowAdd =
        '<div class="row2309">'+
            '<div class="form-group input-group mb-3">' +
                '<div class="input-group-prepend">' +
                '</div>' +
            '<input type="text" name="api_headers['+count+'][key]" placeholder="KEY" class="form-control m-input">'+
            '<textarea rows="1" name="api_headers['+count+'][value]" placeholder="VALUE" class="form-control m-input ml-2"></textarea>'+
            '</div>'+
        '</div>';

        $('#newHeader2309').append(newRowAdd);
    });

    $("#paramAdder").click(function () {
        var count = $('#newParam2309 .row2309').length;
        count++;
        newRowAdd =
        '<div class="row2309">'+
            '<div class="form-group input-group mb-3">' +
                '<div class="input-group-prepend">' +
                '</div>' +
            '<input type="text" name="api_params['+count+'][key]" placeholder="KEY" class="form-control m-input">'+
            '<textarea rows="1" name="api_params['+count+'][value]" placeholder="VALUE" class="form-control m-input ml-2"></textarea>'+
            '</div>'+
        '</div>';

        $('#newParam2309').append(newRowAdd);
    });
</script>