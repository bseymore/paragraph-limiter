<?php

$plugin_info = array(
'pi_name' => 'Paragraph Limiter',
'pi_version' =>'0.9.2',
'pi_author' =>'Brooks Seymore',
'pi_author_url' => 'http://www.example.com/',
'pi_description' => 'Limits the number of displayed paragraphs.',
'pi_usage' => Paragraph_limiter::usage()
);

class Paragraph_limiter
    {

        var $return_data = "";

        function Paragraph_limiter() {

			$this->EE =& get_instance();

            $start = $this->EE->TMPL->fetch_param('start');
            $limit = $this->EE->TMPL->fetch_param('limit');

            $source = str_replace("\n<p>", "\n\n<p>", $this->EE->TMPL->tagdata);

            $paragraphs = explode("\n\n", $source);

            if ( $start > 0 ) {
                $start = $start - 1;
            }

            if ( $limit == 0 ) {
                $limit = count($paragraphs)-$start;
            }

            $i = 0;

            while ($i <= $limit-1) {
                $collated_paragraphs[] = trim($paragraphs[$start]);
                $start++;
                $i++;
            }

            $this->return_data = implode(" ", $collated_paragraphs);
        }

        function usage()
        {
            ob_start();
            ?>

            STILL NEED TO WRITE USAGE INFORMATION

            <?php
            $buffer = ob_get_contents();

            ob_end_clean();

            return $buffer;
        }
        // Plugin Usage -- END
    }

    ?>
