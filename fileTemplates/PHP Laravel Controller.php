<?php
#parse("PHP File Header.php")

#if (${NAMESPACE})
namespace ${NAMESPACE};
#end

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ${NAME}
{
    use AuthorizesRequests;
    
    public function __invoke()
    {
        //
    }
}