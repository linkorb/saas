<?php


namespace Saas\Command;

use Symfony\Component\Console\Helper\DescriptorHelper;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Command\Command;
use Saas\Loader\XmlLoader;

/**
 * ConnectionConfigCommand retrieves configuration info
 *
 */
class ParseXmlCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->ignoreValidationErrors();

        $this
            ->setName('parse:xml')
            ->setDefinition(array(
                new InputArgument('filename', InputArgument::REQUIRED, 'Product (xml) filename')
            ))
            ->setDescription('Parse product xml and display it')
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $filename = $input->getArgument('filename');
        
        $loader = new XmlLoader();

        $product = $loader->load($filename);
        print_r($product);
    }
}
