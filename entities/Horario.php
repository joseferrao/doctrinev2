<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Horario
 *
 * @Table(name="horario")
 * @Entity
 */
class Horario
{
    /**
     * @var integer $id
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $nome
     *
     * @Column(name="nome", type="string", length=80, nullable=true)
     */
    private $nome;

    /**
     * @var string $descricao
     *
     * @Column(name="descricao", type="string", length=200, nullable=true)
     */
    private $descricao;

    /**
     * @var decimal $valor
     *
     * @Column(name="valor", type="decimal", nullable=true)
     */
    private $valor;

    /**
     * @var datetime $createAt
     *
     * @Column(name="create_at", type="datetime", nullable=true)
     */
    private $createAt;

    /**
     * @var datetime $modifyAt
     *
     * @Column(name="modify_at", type="datetime", nullable=true)
     */
    private $modifyAt;

    /**
     * @var boolean $ativo
     *
     * @Column(name="ativo", type="boolean", nullable=true)
     */
    private $ativo;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nome
     *
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * Get descricao
     *
     * @return string 
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set valor
     *
     * @param decimal $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    /**
     * Get valor
     *
     * @return decimal 
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set createAt
     *
     * @param datetime $createAt
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;
    }

    /**
     * Get createAt
     *
     * @return datetime 
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
     * Set modifyAt
     *
     * @param datetime $modifyAt
     */
    public function setModifyAt($modifyAt)
    {
        $this->modifyAt = $modifyAt;
    }

    /**
     * Get modifyAt
     *
     * @return datetime 
     */
    public function getModifyAt()
    {
        return $this->modifyAt;
    }

    /**
     * Set ativo
     *
     * @param boolean $ativo
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;
    }

    /**
     * Get ativo
     *
     * @return boolean 
     */
    public function getAtivo()
    {
        return $this->ativo;
    }
}