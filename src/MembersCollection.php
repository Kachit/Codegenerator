<?php
/**
 * MembersCollection
 *
 * @author Kachit
 */
class MembersCollection {

    /**
     * @var MemberInternalInterface[]
     */
    protected $members = [];

    /**
     * Set Members
     *
     * @param MemberInternalInterface[] $members
     * @return $this;
     */
    public function setMembers($members) {
        foreach ($members as $memberItem) {
            $this->addMember($memberItem);
        }
        return $this;
    }

    /**
     * Get Members
     *
     * @return MemberInternalInterface[]
     */
    public function getMembersList() {
        return $this->members;
    }

    /**
     * Get Member
     *
     * @param string $name
     * @return MemberInternalInterface
     */
    public function getMember($name) {
        return $this->members[$name];
    }

    /**
     * Get Member
     *
     * @param string $name
     * @return bool
     */
    public function hasMember($name) {
        return isset($this->members[$name]);
    }

    /**
     * addMember
     *
     * @param MemberInternalInterface $member
     * @return $this
     */
    public function addMember(MemberInternalInterface $member) {
        $this->members[$member->getName()] = $member;
        return $this;
    }
} 