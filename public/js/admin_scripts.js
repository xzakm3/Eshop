function GetSubcategoriesOf(category) {
    jQuery.ajax({
        url:'http://localhost:8000/getsubcategories',
        type: 'GET',
        data: { category: category.toLowerCase() },
        success: function( data ){
            var subcategories = data.subcategories;
            $('.select-subcategory').html("");
            for(var i = 0; i < subcategories.length; i++) {
                $('.select-subcategory').append('<option value="' + subcategories[i].id + '">' + subcategories[i].name.charAt(0).toUpperCase() + subcategories[i].name.slice(1) + '</option>');
            }
        },
        error: function (xhr, b, c) {
            console.log("xhr=" + xhr + " b=" + b + " c=" + c);
        }
    });
   /*  fetch("http://localhost:8000/getsubcategories", {
        method: 'GET',
        headers: {
            'Content-type': 'application/json',
            'Accept': 'application/json',
            "X-Requested-With": "XMLHttpRequest",
        },
        data: { category: category },
    })
        .then(function(res) {
            return res.json();
        })
        .then(function(response) {
            console.log(response);
        }).catch(function(error) {
            console.log(error);
    }); */
}

$('.select-category').change(function () {
    var category_name = $('.select-category > option:selected').text();
    GetSubcategoriesOf(category_name);
});


$('#add-attribute').click(function () {
    var attr_name = $('input[name="attribute_name"]').val();
    var attr_val = $('input[name="attribute_value"]').val()
    if(attr_name && attr_val) {
        if($('.table-attributes').length === 0) {
            $('#add-attribute').parent().parent().append(`
                <table class="table table-hover table-attributes">
                    <thead>
                        <tr>
                            <th scope="col">Názov</th>
                            <th scope="col">Hodnota</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            `);
        }
        $('.table-attributes tbody').append(`
            <tr>
                <td>` + attr_name + `</td>
                <td>` + attr_val + `</td>
                <td> <span class="delete-attribute" onclick="remove(this)"><i class="fas fa-times"></i></span></td>
            </tr>
        `);
    }

});

function remove(element) {
    $(element).parent().parent().remove();
    if($('.table-attributes tbody > tr').length === 0) {
        $('.table-attributes').remove();
    }
}

function DeleteProduct(id) {
    console.log(id);
}

