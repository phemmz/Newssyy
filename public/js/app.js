$('#search-input').keyup((event) => {
  event.preventDefault();
  const _token = $('input[name="_token"]').val();
  const inputValue = event.target.value;
  const currentPath = window.location.pathname.split('/');
  
  if (!/^\s+|\s+$/g.test(inputValue)) {
    $.ajax({
      type: "POST",
      url: currentPath[1] ? `/searchNews/${currentPath[2]}` : "/searchNewsSources",
      data: { source: event.target.value, _token },
      success: (result) => {
        $('#appendDivNews').replaceWith(result);
        $('#search-input').val(inputValue);
      },
      error: (err) => {
        console.log(err.responseJSON.message);
      }
    })
  }
});
