<form id='searchform' class='searchform' role='search' method='get' action='<?php echo esc_url( home_url('/') ); ?>'>
    <div class='input-group'>
        <input id='s'  name='s'  class='form-control' type='text' placeholder='<?php esc_attr_e( 'Search', 'simple-light' ) ?>...' value='<?php echo get_search_query() ?>' />
        <div class='input-group-append'>
            <button id='searchsubmit' class='btn btn-outline-secondary'  type='submit'>
                <i class='fas fa-search'></i>
            </button>
        </div>
    </div>
</form>