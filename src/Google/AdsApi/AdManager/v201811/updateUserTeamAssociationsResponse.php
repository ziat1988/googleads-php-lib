<?php

namespace Google\AdsApi\AdManager\v201811;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateUserTeamAssociationsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201811\UserTeamAssociation[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201811\UserTeamAssociation[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201811\UserTeamAssociation[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201811\UserTeamAssociation[] $rval
     * @return \Google\AdsApi\AdManager\v201811\updateUserTeamAssociationsResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
