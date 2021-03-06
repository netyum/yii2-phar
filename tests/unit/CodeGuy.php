<?php
// This class was automatically generated by build task
// You should not change it manually as it will be overwritten on next build
// @codingStandardsIgnoreFile


use \Codeception\Maybe;
use Codeception\Module\CodeHelper;
use Codeception\Module\ComponentHelper;
use Codeception\Module\IteratorHelper;
use Codeception\Module\BuilderHelper;
use Codeception\Module\FileHelper;

/**
 * Inherited methods
 * @method void execute($callable)
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void offsetGet($offset)
 * @method void offsetSet($offset, $value)
 * @method void offsetExists($offset)
 * @method void offsetUnset($offset)
*/

class CodeGuy extends \Codeception\AbstractGuy
{
    
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\CodeHelper::extractPharFile()
     * @return \Codeception\Maybe
     */
    public function extractPharFile() {
        $this->scenario->addStep(new \Codeception\Step\Action('extractPharFile', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\CodeHelper::runPharCommand()
     * @return \Codeception\Maybe
     */
    public function runPharCommand() {
        $this->scenario->addStep(new \Codeception\Step\Action('runPharCommand', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
    * Conditional Assertion: Test won't be stopped on fail
     * @see Codeception\Module\CodeHelper::seeAllFilesCompiled()
     * @return \Codeception\Maybe
     */
    public function canSeeAllFilesCompiled() {
        $this->scenario->addStep(new \Codeception\Step\ConditionalAssertion('seeAllFilesCompiled', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\CodeHelper::seeAllFilesCompiled()
     * @return \Codeception\Maybe
     */
    public function seeAllFilesCompiled() {
        $this->scenario->addStep(new \Codeception\Step\Assertion('seeAllFilesCompiled', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module::getName()
     * @return \Codeception\Maybe
     */
    public function getName() {
        $this->scenario->addStep(new \Codeception\Step\Action('getName', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\ComponentHelper::createFileEvent()
     * @return \Codeception\Maybe
     */
    public function createFileEvent($relativePathAsArray) {
        $this->scenario->addStep(new \Codeception\Step\Action('createFileEvent', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\ComponentHelper::processFileEventByComponent()
     * @return \Codeception\Maybe
     */
    public function processFileEventByComponent($object, $relativePathAsArray) {
        $this->scenario->addStep(new \Codeception\Step\Action('processFileEventByComponent', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\ComponentHelper::removeTemporaryFile()
     * @return \Codeception\Maybe
     */
    public function removeTemporaryFile($file) {
        $this->scenario->addStep(new \Codeception\Step\Action('removeTemporaryFile', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
    * Conditional Assertion: Test won't be stopped on fail
     * @see Codeception\Module\ComponentHelper::seeFileRealPathChanged()
     * @return \Codeception\Maybe
     */
    public function canSeeFileRealPathChanged($newFile, $relativePathAsArray) {
        $this->scenario->addStep(new \Codeception\Step\ConditionalAssertion('seeFileRealPathChanged', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\ComponentHelper::seeFileRealPathChanged()
     * @return \Codeception\Maybe
     */
    public function seeFileRealPathChanged($newFile, $relativePathAsArray) {
        $this->scenario->addStep(new \Codeception\Step\Assertion('seeFileRealPathChanged', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
    * Conditional Assertion: Test won't be stopped on fail
     * @see Codeception\Module\ComponentHelper::seeFixedFile()
     * @return \Codeception\Maybe
     */
    public function canSeeFixedFile($file) {
        $this->scenario->addStep(new \Codeception\Step\ConditionalAssertion('seeFixedFile', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\ComponentHelper::seeFixedFile()
     * @return \Codeception\Maybe
     */
    public function seeFixedFile($file) {
        $this->scenario->addStep(new \Codeception\Step\Assertion('seeFixedFile', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
    * Conditional Assertion: Test won't be stopped on fail
     * @see Codeception\Module\ComponentHelper::seeMinimizedFile()
     * @return \Codeception\Maybe
     */
    public function canSeeMinimizedFile($file, $relativePathAsArray) {
        $this->scenario->addStep(new \Codeception\Step\ConditionalAssertion('seeMinimizedFile', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\ComponentHelper::seeMinimizedFile()
     * @return \Codeception\Maybe
     */
    public function seeMinimizedFile($file, $relativePathAsArray) {
        $this->scenario->addStep(new \Codeception\Step\Assertion('seeMinimizedFile', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\IteratorHelper::createModuleForIterator()
     * @return \Codeception\Maybe
     */
    public function createModuleForIterator() {
        $this->scenario->addStep(new \Codeception\Step\Action('createModuleForIterator', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\IteratorHelper::getAllFilesFromIteratorByModule()
     * @return \Codeception\Maybe
     */
    public function getAllFilesFromIteratorByModule($module) {
        $this->scenario->addStep(new \Codeception\Step\Action('getAllFilesFromIteratorByModule', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
    * Conditional Assertion: Test won't be stopped on fail
     * @see Codeception\Module\IteratorHelper::seeAllFilesFoundByIterator()
     * @return \Codeception\Maybe
     */
    public function canSeeAllFilesFoundByIterator($actual) {
        $this->scenario->addStep(new \Codeception\Step\ConditionalAssertion('seeAllFilesFoundByIterator', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\IteratorHelper::seeAllFilesFoundByIterator()
     * @return \Codeception\Maybe
     */
    public function seeAllFilesFoundByIterator($actual) {
        $this->scenario->addStep(new \Codeception\Step\Assertion('seeAllFilesFoundByIterator', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\BuilderHelper::addOpenSSLSignature()
     * @return \Codeception\Maybe
     */
    public function addOpenSSLSignature() {
        $this->scenario->addStep(new \Codeception\Step\Action('addOpenSSLSignature', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\BuilderHelper::addRightCompress()
     * @return \Codeception\Maybe
     */
    public function addRightCompress() {
        $this->scenario->addStep(new \Codeception\Step\Action('addRightCompress', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\BuilderHelper::addRightSignature()
     * @return \Codeception\Maybe
     */
    public function addRightSignature() {
        $this->scenario->addStep(new \Codeception\Step\Action('addRightSignature', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\BuilderHelper::addRightStub()
     * @return \Codeception\Maybe
     */
    public function addRightStub() {
        $this->scenario->addStep(new \Codeception\Step\Action('addRightStub', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\BuilderHelper::addWrongCompress()
     * @return \Codeception\Maybe
     */
    public function addWrongCompress() {
        $this->scenario->addStep(new \Codeception\Step\Action('addWrongCompress', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\BuilderHelper::addWrongOpenSSLSignature()
     * @return \Codeception\Maybe
     */
    public function addWrongOpenSSLSignature() {
        $this->scenario->addStep(new \Codeception\Step\Action('addWrongOpenSSLSignature', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\BuilderHelper::addWrongSignature()
     * @return \Codeception\Maybe
     */
    public function addWrongSignature() {
        $this->scenario->addStep(new \Codeception\Step\Action('addWrongSignature', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\BuilderHelper::addWrongStub()
     * @return \Codeception\Maybe
     */
    public function addWrongStub() {
        $this->scenario->addStep(new \Codeception\Step\Action('addWrongStub', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\BuilderHelper::createExamplePhar()
     * @return \Codeception\Maybe
     */
    public function createExamplePhar($runtimePath = null) {
        $this->scenario->addStep(new \Codeception\Step\Action('createExamplePhar', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
    * Conditional Assertion: Test won't be stopped on fail
     * @see Codeception\Module\BuilderHelper::seeCompressed()
     * @return \Codeception\Maybe
     */
    public function canSeeCompressed() {
        $this->scenario->addStep(new \Codeception\Step\ConditionalAssertion('seeCompressed', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\BuilderHelper::seeCompressed()
     * @return \Codeception\Maybe
     */
    public function seeCompressed() {
        $this->scenario->addStep(new \Codeception\Step\Assertion('seeCompressed', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
    * Conditional Assertion: Test won't be stopped on fail
     * @see Codeception\Module\BuilderHelper::seeOpenSSLSignature()
     * @return \Codeception\Maybe
     */
    public function canSeeOpenSSLSignature() {
        $this->scenario->addStep(new \Codeception\Step\ConditionalAssertion('seeOpenSSLSignature', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\BuilderHelper::seeOpenSSLSignature()
     * @return \Codeception\Maybe
     */
    public function seeOpenSSLSignature() {
        $this->scenario->addStep(new \Codeception\Step\Assertion('seeOpenSSLSignature', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
    * Conditional Assertion: Test won't be stopped on fail
     * @see Codeception\Module\BuilderHelper::seeRightSignature()
     * @return \Codeception\Maybe
     */
    public function canSeeRightSignature() {
        $this->scenario->addStep(new \Codeception\Step\ConditionalAssertion('seeRightSignature', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\BuilderHelper::seeRightSignature()
     * @return \Codeception\Maybe
     */
    public function seeRightSignature() {
        $this->scenario->addStep(new \Codeception\Step\Assertion('seeRightSignature', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
    * Conditional Assertion: Test won't be stopped on fail
     * @see Codeception\Module\BuilderHelper::seeRightStub()
     * @return \Codeception\Maybe
     */
    public function canSeeRightStub() {
        $this->scenario->addStep(new \Codeception\Step\ConditionalAssertion('seeRightStub', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\BuilderHelper::seeRightStub()
     * @return \Codeception\Maybe
     */
    public function seeRightStub() {
        $this->scenario->addStep(new \Codeception\Step\Assertion('seeRightStub', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\BuilderHelper::setRuntimeDirectory()
     * @return \Codeception\Maybe
     */
    public function setRuntimeDirectory($path) {
        $this->scenario->addStep(new \Codeception\Step\Action('setRuntimeDirectory', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
    * Conditional Assertion: Test won't be stopped on fail
     * @see Codeception\Module\FileHelper::seeRightPathConvert()
     * @return \Codeception\Maybe
     */
    public function canSeeRightPathConvert() {
        $this->scenario->addStep(new \Codeception\Step\ConditionalAssertion('seeRightPathConvert', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\FileHelper::seeRightPathConvert()
     * @return \Codeception\Maybe
     */
    public function seeRightPathConvert() {
        $this->scenario->addStep(new \Codeception\Step\Assertion('seeRightPathConvert', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }
}

