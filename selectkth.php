
<?php


function selectKth($arr, $k) {

            if ($arr == null || count($arr) <= $k) {
                return -1;
            }
            $from = 0;
            $to = count($arr) - 1;
            // if from ==  to, we reached the kth element
            while ($from < $to) {
                // reader, checks the value position
                $r = $from;
                // writer, gets the value from the reader, when it is larger
                //         than the pivot (middle of the searched segment)
                $w = $to;
                // find the middle of the segment we are searching
                $mid = $arr[floor(($r + $w) / 2)];
                // we stop when the reader and write meet.
                while ($r < $w) {
                    // check if the value in the current read node is larger than the middle
                    if ($arr[$r] >= $mid)
                    {
                        // swap the read/write nodes when comparison passes
                        $tmp = $arr[$w];
                        $arr[$w] = $arr[$r];
                        $arr[$r] = $tmp;
                        // Decrement the write node, and continue the comparisons, swapping when necessary
                        $w--;
                    }
                    else {
                        // in the case that the read node is less than the middle value, increment the read node up one segment, we can't do anything.
                        $r++;
                    } // end comparison
                }// end while(r<w) loop, r == w;
                // check if read node is greater than middle value, if so, traverse back
                if ($arr[$r] > $mid) {
                    $r--;
                }
                // check if r has reached k
                if ($k <= $r)
                {
                    // if r is at k, or not yet, setup for at least one more swap.
                    $to = $r;

                }
                else {
                    // when k is still greater than r, we will keep moving the read node up.
                    $from = $r + 1;
                }
            }
            // we have sorted our segment and found the kth number in the series. return it.
            return $arr[$k];
        }



