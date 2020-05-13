<?php

use PhpCsFixer\Event\{Event as MainEvent,MoreEvent as MainMoreEvent};
use PhpCsFixer\Tokenizer\Tokens;
class DefaultClass{
    public function supports(\SplFileInfo $file){
        return true;
    }
    public function configure(array $configuration = null){
        if(!$this instanceof ConfigurationDefinitionFixerInterface){
            throw new \LogicException('Cannot configure using Abstract parent, child not implementing "PhpCsFixer\Fixer\ConfigurationDefinitionFixerInterface".');
        }
    }
    protected function find($functionNameToSearch,Tokens $tokens, $start=0, $end=null){
        $end=null===$end?$tokens->count():$end;
        $candidateSequence = [[T_STRING, $functionNameToSearch],'('];
        $matches=$tokens->findSequence($candidateSequence,$start,$end,false);
        if(null=== $matches){return null;}
    }
}